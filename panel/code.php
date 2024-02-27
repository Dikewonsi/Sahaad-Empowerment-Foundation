<?php

    session_start();
    include ("config.php");
    include ("myfunctions.php");    

    if (isset($_POST['add_new_project'])) 
    {
       
        $title = $_POST['title'];
        $body = $_POST['body'];
        $location = $_POST['location'];
        $date = $_POST['date'];

        $sql_insert_project = "INSERT INTO projects (title, body, location, date) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql_insert_project);
        $stmt->bind_param("ssss", $title, $body, $location, $date);

        if ($stmt->execute()) {
            $last_project_id = $conn->insert_id; // Get the last inserted project ID
        } else {
            echo "Error inserting project: " . $conn->error;
            exit(); // Exit script if error occurs
        }

        // Insert image paths into project_images table
        if (!empty($_FILES['images']['name'][0])) {
            foreach ($_FILES['images']['name'] as $key => $name) {
                $image_name = basename($_FILES['images']['name'][$key]);
                $target_dir = "projects/";
                $target_file = $target_dir . $image_name;

                if (move_uploaded_file($_FILES['images']['tmp_name'][$key], $target_file)) {
                    $sql_insert_image = "INSERT INTO project_images (project_id, image_path) VALUES (?, ?)";
                    $stmt_image = $conn->prepare($sql_insert_image);
                    $stmt_image->bind_param("is", $last_project_id, $image_name);

                    if (!$stmt_image->execute()) {
                        echo "Error inserting image: " . $conn->error;                    
                        exit(); // Exit script if error occurs
                    }
                } else {
                    echo "Error uploading image.";
                    exit(); // Exit script if error occurs
                }
            }
        }

        redirect("dashboard.php", "Charity Project Added Successfully");

        $stmt->close();
        $stmt_image->close();
        $conn->close();
    }

    else  if(isset($_POST['edit_charity_project']))
    {
        $project_id = $_POST['id'];
        $title = $_POST['title'];
        $description = $_POST['descrip'];

        // Update project details
        $sql_update_project = "UPDATE projects SET title='$title', body='$description' WHERE id=$project_id";
        if ($conn->query($sql_update_project) === TRUE) {
            echo "Project details updated successfully.<br>";
        } else {
            echo "Error updating project details: " . $conn->error . "<br>";
        }

        // Delete selected images
        if (isset($_POST['delete_images'])) {
            $delete_images = $_POST['delete_images'];
            foreach ($delete_images as $image_id) {
                $sql_delete_image = "DELETE FROM project_images WHERE id=$image_id";
                if ($conn->query($sql_delete_image) === TRUE) {
                    echo "Image deleted successfully.<br>";
                } else {
                    echo "Error deleting image: " . $conn->error . "<br>";
                }
            }
        }

        // Upload new images
        if (!empty($_FILES['new_images']['name'][0])) {
            $target_dir = "./projects/";
            $uploaded_images = [];
            $num_files = count($_FILES['new_images']['name']);
            for ($i = 0; $i < $num_files; $i++) {
                $file_name = basename($_FILES['new_images']['name'][$i]);
                $target_file = $target_dir . $file_name;
                if (move_uploaded_file($_FILES['new_images']['tmp_name'][$i], $target_file)) {
                    $uploaded_images[] = $file_name;
                } else {
                    echo "Error uploading file: " . $_FILES['new_images']['error'][$i] . "<br>";
                }
            }
            
            // Insert new images into database
            if (!empty($uploaded_images)) {
                foreach ($uploaded_images as $image_name) {
                    $sql_insert_image = "INSERT INTO project_images (project_id, image_path) VALUES ($project_id, '$image_name')";
                    if ($conn->query($sql_insert_image) === TRUE) {
                        echo "Image inserted into database successfully.<br>";
                    } else {
                        echo "Error inserting image into database: " . $conn->error . "<br>";
                    }
                }
            }
        }
        redirect("dashboard.php", "Charity Project Updated Successfully");
    }

    else if (isset($_POST['add_new_donation_project']))
        {
            $type = $_POST['type'];
            $title = $_POST['title'];
            $descrip = $_POST['descrip'];
            $goal = $_POST['goal'];       
            $amount_raised = $_POST['amount_raised'];

            $pro_id = "SEH-2024".rand(9999, 1111);

            $aimage=$_FILES['img_one']['name'];

            $temp_name  =$_FILES['img_one']['tmp_name'];

            move_uploaded_file($temp_name,"images/$aimage");
                

            $project_query = "INSERT INTO `projects`(`pro_id`, `type`, `title`, `description`, `target`, `amount_raised`, `image`, `date_added`)
            VALUES('$pro_id', '$type', '$title', '$descrip', '$goal', '$amount_raised', '$aimage', now() )";

            $project_query_run = mysqli_query($conn, $project_query);

            if ($project_query_run)
            {
                move_uploaded_file($_FILES['image']['tmp_name'], $path.'/'.$filename);

                redirect("dashboard.php", "Donation Project Added Successfully");
            }
            else
            {
                    // redirect("add-new-product.php", "Something went wrong");
                    echo 404;
            }
        }

    else  if (isset($_POST['add_new_photo'])) 
        {
        
            $type = $_POST['type'];
            $aimage=$_FILES['img_one']['name'];            
            

            $temp_name  =$_FILES['img_one']['tmp_name'];
            

            move_uploaded_file($temp_name,"gallery/$aimage");                      
                

        $photo_query = "INSERT INTO `gallery`(`type`, `image`)
        VALUES('$type', '$aimage')";

        $photo_query_run = mysqli_query($conn, $photo_query);

        if ($photo_query_run)
        {
            move_uploaded_file($_FILES['image']['tmp_name'], $path.'/'.$filename);
            redirect("add-photo.php", "Photo Added Successfully");
        }
        else
        {
                // redirect("add-new-product.php", "Something went wrong");
                echo 404;
        }
    }

    else if (isset($_POST['edit_project_btn']))
        {   
            $id = $_POST['id'];
            $type = $_POST['type'];
            $title = $_POST['title'];
            $descrip = $_POST['descrip'];
            $target = $_POST['target'];
            $amount_raised = $_POST['amount_raised'];
            
            $update_project_query=" UPDATE `projects` SET `id`='$id',`type`='$type',`title`='$title',`description`='$descrip',`target`='$target',`amount_raised`='$amount_raised',`date_modified`= now()  WHERE id ='$id'  ";        

            $update_projecct_query_run = mysqli_query($conn, $update_project_query);

            if ($update_projecct_query_run)
            {                
                redirect("dashboard.php?id=$id", "Project Updated Successfully");
            }
            else
            {
                redirect("edit-home-page.php?id=$id", "Project Not Updated Successfully");
            }
        }

    else if (isset($_POST['delete_project_btn']))
        {
            $id = mysqli_escape_string($conn, $_POST['id']); 

            $delete_query = "DELETE FROM projects WHERE id = '$id' ";
            $delete_query_run = mysqli_query($conn, $delete_query);

            if ($delete_query)
            {                

                redirect("dashboard.php", "Project Has Been Deleted");      
            }
            else
            {
                redirect("delete-donation-page.php?id=$id", "Something went wrong");
            }
        }  
    
    else if (isset($_POST['delete_donation_project_btn']))
        {
            $id = mysqli_escape_string($conn, $_POST['id']); 

            $delete_query = "DELETE FROM projectx WHERE id = '$id' ";
            $delete_query_run = mysqli_query($conn, $delete_query);

            if ($delete_query)
            {                

                redirect("dashboard.php", "Project Has Been Deleted");      
            }
            else
            {
                redirect("delete-donation-page.php?id=$id", "Something went wrong");
            }
        }
      

    else if (isset($_POST['update_admin_btn']))
        {   
            $id = 1;
            $old_pass = $_POST['old_pass'];
            $new_pass = $_POST['new_pass'];
            $con_pass = $_POST['con_pass'];     
            
            $check_admin_query = "SELECT * FROM admin WHERE id = '$id' ";
            $check_admin_query_run = mysqli_query($conn, $check_admin_query);
            $admin_data = mysqli_fetch_array($check_admin_query_run);

            if(mysqli_num_rows($check_admin_query_run) > 0)
            {
                if($old_pass == $admin_data['password'])
                {
                   if($new_pass == $con_pass)
                   {
                        $update_admin_query=" UPDATE admin SET password='$con_pass' WHERE id ='$id'  ";        

                        $update_admin_query_run = mysqli_query($conn, $update_admin_query);

                        redirect("dashboard-profile.php?id=$id", "Admin Details Updated Successfully");
                   }
                   else
                   {
                        redirect("dashboard-change-password.php?id=$id", "New Password Does not match Confirmed Password.");
                   }
                }
                else
                {
                    redirect("dashboard-change-password.php?id=$id", "Old Password Does not match with records.");
                }
            }
            else
            {
                echo 0;
            }                    
        }
    
    
        else if (isset($_POST['add_mem_btn'])) 
        {
            $name = $_POST['name'];
            $role = $_POST['role'];
    
            $aimage=$_FILES['image']['name'];

            $temp_name  =$_FILES['image']['tmp_name'];

            move_uploaded_file($temp_name,"members/$aimage");
    
           $mem_query = "INSERT INTO members (name,role,image,date_added)
           VALUES('$name','$role','$aimage', now())";
    
           $mem_query_run = mysqli_query($conn, $mem_query);
    
           if ($mem_query_run)
           {
                move_uploaded_file($_FILES['image']['tmp_name'], $path.'/'.$filename);

                redirect("dashboard.php", "Member Added Successfully");
           }
           else
           {
                redirect("add-member.php", "Something went wrong"); 
           }
        }
        
        else if (isset($_POST['update_mem_btn']))
        {   
            $mem_id = $_POST['id'];           
            $name = $_POST['name'];
            $role = $_POST['role'];         

            $new_image = $_FILES['image']['name'];
            $old_image = $_POST['old_image'];

            if ($new_image != "")
            {
                $update_filename = $new_image;  
                
            }
            else
            {
                $update_filename = $old_image;
            }

            $path = "./members";
            
            $update_mem_query=" UPDATE members SET name='$name', role='$role', image='$update_filename' WHERE id ='$mem_id'  ";        

            $update_mem_query_run = mysqli_query($conn, $update_mem_query);

            if ($update_mem_query_run)
            {
                if($_FILES['image']['name'] != "")
                {
                    move_uploaded_file($_FILES['image']['tmp_name'], $path.'/'.$new_image);
                    if(file_exists("./members/".$old_image))
                    {
                        unlink("./members/".$old_image);
                    }
                }
                redirect("edit-member.php", "Member Updated Successfully");
            }
            else
            {
                redirect("edit-member.php", "Member Not Updated Successfully");
            }
        }

        else if (isset($_POST['delete_mem_btn']))
        {
            $id = mysqli_escape_string($conn, $_POST['id']); 

            $delete_query = "DELETE FROM members WHERE id = '$id' ";
            $delete_query_run = mysqli_query($conn, $delete_query);

            if ($delete_query)
            {                

                redirect("dashboard.php", "Member Has Been Deleted");      
            }
            else
            {
                redirect("delete-member-page.php?id=$id", "Something went wrong");
            }
        } 

    else
    {
        header("location: dashboard.php");
    }

 ?>