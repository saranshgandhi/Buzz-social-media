
<?php

// Start the session
session_start();

// Include the database connection file
include_once 'db_connection.php';
// Start the session
session_start();

// Include the database connection file
include_once 'db_connection.php';
$sql = "SELECT * FROM reg";
$run_Sql = mysqli_query($con, $sql);
if($run_Sql){
    $fetch_info = mysqli_fetch_assoc($run_Sql);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buzz</title>
    
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css">
    
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <nav>
        <div class="container">
            <h2 class="logo">
                Buzz
            </h2>
            <div class="search-bar">
                <i class="uil uil-search"></i>
                <input type="search" placeholder="Search for creators, inspirations, and projects">
            </div>
            <div class="create">
                <label class="btn btn-primary" for="create-post">Create</label>
                <div class="profile-photo">
                    <img src="./images/buzzp.jpeg" alt="">
                </div>
            </div>
        </div>
    </nav>

    <!-------------------------------- MAIN ----------------------------------->
    <main>
        <div class="container">
            <!----------------- LEFT -------------------->
            <div class="left">
                <a class="profile">
                    <!-- <div class="profile-photo">
                        <img src="./images/myp.jpeg">
                    </div> -->
                    <div class="handle">
                        <h4><?php echo isset($fetch_info['name']) ? $fetch_info['name'] : ''; ?></h4>
                        <p class="text-muted">
                        <?php echo isset($fetch_info['username']) ? $fetch_info['username'] : ''; ?>

                        </p>
                    </div>
                </a>

                <!----------------- SIDEBAR -------------------->
                <div class="sidebar">
                    <a class="menu-item active">
                        <span><i class="uil uil-home"></i></span>
                        <h3>Home</h3>   
                    </a>
                    <a class="menu-item">
                        <span><i class="uil uil-compass"></i></span>
                        <h3>Explore</h3>
                    </a>
                    <a class="menu-item"  id="notifications">
                        <span><i class="uil uil-bell"><small class="notification-count">9+</small></i></span>
                        <h3>Notification</h3>
                        <!--------------- NOTIFICATION POPUP --------------->
                        <div class="notifications-popup">
                            <div>
                                <div class="profile-photo">
                                    <img src="./images/p1.jpeg">
                                </div>
                                <div class="notification-body">
                                    <b>Govind Puniani</b> accepted your friend request
                                    <small class="text-muted">2 Days Ago</small>
                                </div>
                            </div>
                            <div>
                                <div class="profile-photo">
                                    <img src="./images/p2.jpeg">
                                </div>
                                <div class="notification-body">
                                    <b>Meet Jain</b> commented on your post
                                    <small class="text-muted">1 Hour Ago</small>
                                </div>
                            </div>
                            <div>
                                <div class="profile-photo">
                                    <img src="./images/p3.jpeg">
                                </div>
                                <div class="notification-body">
                                    <b>Aryan</b> and <b>283 Others</b> liked your post
                                    <small class="text-muted">4 Minutes Ago</small>
                                </div>
                            </div>
                            <div>
                                <div class="profile-photo">
                                    <img src="./images/p4.jpeg">
                                </div>
                                <div class="notification-body">
                                    <b>Prem</b> commented on a post you are tagged in
                                    <small class="text-muted">2 Days Ago</small>
                                </div>
                            </div>
                            <div>
                                <div class="profile-photo">
                                    <img src="./images/p5.jpeg">
                                </div>
                                <div class="notification-body">
                                    <b>Harsh </b> commented on a post you are tagged in
                                    <small class="text-muted">1 Hour Ago</small>
                                </div>
                            </div>
                            <div>
                                <div class="profile-photo">
                                    <img src="./images/p6.jpeg">
                                </div>
                                <div class="notification-body">
                                    <b>Dhruv</b> commented on your post
                                    <small class="text-muted">1 Hour Ago</small>
                                </div>
                            </div>
                        </div>
                        <!--------------- END NOTIFICATION POPUP --------------->
                    </a>
                    <a class="menu-item" id="messages-notifications">
                        <span><i class="uil uil-envelope-alt"><small class="notification-count">6</small></i></span>
                        <h3>Messages</h3>
                    </a>
                   
                    </a>
                    <a class="menu-item" id="theme">
                        <span><i class="uil uil-palette"></i></span>
                        <h3>Theme</h3>
                    </a>
                    <a class="menu-item">
                        <span><i class="uil uil-setting"></i></span>
                        <h3>Setting</h3>
                    </a>
                </div>
                <!----------------- END OF SIDEBAR -------------------->
                <label class="btn btn-primary" for="create-post">Create Post</label>
            </div>

            <!----------------- MIDDLE -------------------->
            <div class="middle">
                 <!----------------- STORIES -------------------->
                <div class="stories">
                    <div class="story">
                        
                        <p class="name">My Story</p>
                    </div>
                    <div class="story">
                        
                        <p class="name">Govind</p>
                    </div>
                    <div class="story">
                       
                        <p class="name">Meet</p>
                    </div>
                    <div class="story">
                        
                        <p class="name">Prem</p>
                    </div>
                    <div class="story">
                        
                        <p class="name">Dhruv</p>
                    </div>
                    <div class="story">
                        
                        <p class="name">Harsh</p>
                    </div>
                </div>
                <!----------------- END OF STORIES -------------------->
            <!-- HTML form for creating posts -->
<form id="post-form" class="create-post" enctype="multipart/form-data">
    <div class="profile-photo">
    </div>
    <textarea id="post-text" placeholder="What's on your mind?"></textarea>
    <input type="file" id="post-image" accept="image/*">
    <input type="submit" value="Post" class="btn btn-primary">
</form>

<script>
document.getElementById('post-form').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent the default form submission behavior

        // Get text content and image file from the form
        const text = document.getElementById('post-text').value;
        const image = document.getElementById('post-image').files[0];

        // Call the function to post the content
        postContent(text, image);

        // Clear the form fields
        document.getElementById('post-text').value = '';
        document.getElementById('post-image').value = '';
    });

    // Function to post the content
    function postContent(text, image) {
        // Simulate posting behavior, you can replace this with actual AJAX request
        setTimeout(() => {
            // Create a new post element
            const postElement = document.createElement('div');
            postElement.classList.add('post');

            // Add text content to the post
            const textElement = document.createElement('p');
            textElement.textContent = text;
            postElement.appendChild(textElement);

            // Add image to the post if available
            if (image) {
                const imageElement = document.createElement('img');
                imageElement.src = URL.createObjectURL(image);
                postElement.appendChild(imageElement);
            }

            // Append the post element to the feed
            document.getElementById('feed').appendChild(postElement);
        }, 1000); // Simulate posting delay (1 second)
    }
    </script>
-->

<!-- Container for displaying posts -->
<div id="feed"></div>


                
                <!----------------- FEEDS -------------------->
                <div class="feeds">
                    <!----------------- FEED 1 -------------------->
                    <div class="feed">
                        <div class="head">
                            <div class="user">
                                <div class="profile-photo">
                                    <img src="./images/p7.jpeg">
                                </div>
                                <div class="info">
                                    <h3>Aakash</h3>
                                </div>
                            </div>
                            <span class="edit">
                                <i class="uil uil-ellipsis-h"></i>
                            </span>
                        </div>

                        <div class="photo">
                            <img src="./images/st1.avif">
                        </div>

                        <div class="action-buttons">
                            <div class="interaction-buttons">
                                <span><i class="uil uil-heart"></i></span>
                                <span><i class="uil uil-comment-dots"></i></span>
                                <span><i class="uil uil-share-alt"></i></span>
                            </div>
                            <div class="bookmark">
                                <span><i class="uil uil-bookmark-full"></i></span>
                            </div>
                        </div>

                        

                        <div class="caption">
                            <p><b>Govind Puniani</b> Relaxing
                            <span class="harsh-tag">#lifestyle</span></p>
                        </div>

                        <div class="comments text-muted">
                            View all 277 comments
                        </div>
                    </div>
                    <!----------------- END OF FEED 1 -------------------->

                    <!----------------- FEED 2 -------------------->
                    <div class="feed">
                        <div class="head">
                            <div class="user">
                                <div class="profile-photo">
                                    <img src="./images/p8.jpeg">
                                </div>
                                <div class="info">
                                    <h3>Meet Jain</h3>
                                    
                                </div>
                            </div>
                            <span class="edit">
                                <i class="uil uil-ellipsis-h"></i>
                            </span>
                        </div>

                        <div class="photo">
                            <img src="./images/post2.jpeg">
                        </div>

                        <div class="action-buttons">
                            <div class="interaction-buttons">
                                <span><i class="uil uil-heart"></i></span>
                                <span><i class="uil uil-comment-dots"></i></span>
                                <span><i class="uil uil-share-alt"></i></span>
                            </div>
                            <div class="bookmark">
                                <span><i class="uil uil-bookmark-full"></i></span>
                            </div>
                        </div>

                        <div class="caption">
                            <p><b>Meet Jain</b> Beast Mode Activated
                            
                        </div>

                        <div class="comments text-muted">
                            View all 100 comments
                        </div>
                    </div>
                    <!----------------- END OF FEED 2 -------------------->

                    <!----------------- FEED 3 -------------------->
                    <div class="feed">
                        <div class="head">
                            <div class="user">
                                <div class="profile-photo">
                                    <img src="./images/p9.jpeg">
                                </div>
                                <div class="info">
                                    <h3>Prem</h3>
                                    
                                </div>
                            </div>
                            <span class="edit">
                                <i class="uil uil-ellipsis-h"></i>
                            </span>
                        </div>

                        <div class="photo">
                            <img src="./images/post3.avif">
                        </div>

                        <div class="action-buttons">
                            <div class="interaction-buttons">
                                <span><i class="uil uil-heart"></i></span>
                                <span><i class="uil uil-comment-dots"></i></span>
                                <span><i class="uil uil-share-alt"></i></span>
                            </div>
                            <div class="bookmark">
                                <span><i class="uil uil-bookmark-full"></i></span>
                            </div>
                        </div>

                     

                        <div class="caption">
                            <p><b>Prem</b> Life is fun
                            
                        </div>

                        <div class="comments text-muted">
                            View all 50 comments
                        </div>
                    </div>
                    <!----------------- END OF FEED 3 -------------------->

                    <!----------------- FEED 4 -------------------->
                    <div class="feed">
                        <div class="head">
                            <div class="user">
                                <div class="profile-photo">
                                    <img src="./images/p10.jpeg">
                                </div>
                                <div class="info">
                                    <h3>Aryan Vartak</h3>
                                    
                                </div>
                            </div>
                            <span class="edit">
                                <i class="uil uil-ellipsis-h"></i>
                            </span>
                        </div>

                        <div class="photo">
                            <img src="./images/post5.jpeg">
                        </div>

                        <div class="action-buttons">
                            <div class="interaction-buttons">
                                <span><i class="uil uil-heart"></i></span>
                                <span><i class="uil uil-comment-dots"></i></span>
                                <span><i class="uil uil-share-alt"></i></span>
                            </div>
                            <div class="bookmark">
                                <span><i class="uil uil-bookmark-full"></i></span>
                            </div>
                        </div>

                      
                        <div class="caption">
                            <p><b>Aryan Vartak</b> Movie Time
                            <span class="harsh-tag">#interstellar</span></p>
                        </div>

                        <div class="comments text-muted">
                            View all 5 comments
                        </div>
                    </div>
                    <!----------------- END OF FEED 4 -------------------->

                
                </div>
                <!----------------- END OF FEEDS -------------------->
            </div>
             <!----------------- END OF MIDDLE -------------------->

            <!----------------- RIGHT -------------------->
            <div class="right">
                <!------- MESSAGES ------->
                <div class="messages">
                    <div class="heading">
                        <h4>Messages</h4>
                        <i class="uil uil-edit"></i>
                    </div>
                    <!------- SEARCH BAR ------->
                    <div class="search-bar">
                        <i class="uil uil-search"></i>
                        <input type="search" placeholder="Search messages" id="message-search">
                    </div>
                    <!------- MESSAGES CATEGORY ------->
                    <div class="category">
                       
                       
                    </div>
                    <!------- MESSAGES ------->
                    <div class="message">
                        <div class="profile-photo">
                            <img src="./images/p19.jpeg">
                        </div>
                        <div class="message-body">
                            <h5>Govind</h5>
                            <p class="text-muted">Just woke up bruh</p>
                        </div>
                    </div>
                    <!------- MESSAGES ------->
                    <div class="message">
                        <div class="profile-photo">
                            <img src="./images/p14.jpeg">
                        </div>
                        <div class="message-body">
                            <h5>Ananya</h5>
                            <p class="text-bold">Hard to decide</p>
                        </div>
                    </div>
                    <!------- MESSAGES ------->
                    <div class="message">
                        <div class="profile-photo">
                            <img src="./images/p15.jpeg">
                            <div class="active"></div>
                        </div>
                        <div class="message-body">
                            <h5>Deepika</h5>
                            <p class="text-muted">lol u right</p>
                        </div>
                    </div>
                    <!------- MESSAGES ------->
                    <div class="message">
                        <div class="profile-photo">
                            <img src="./images/p17.jpeg">
                        </div>
                        <div class="message-body">
                            <h5>Disha</h5>
                            <p class="text-muted">Birtday Tomorrow</p>
                        </div>
                    </div>
                    <!------- MESSAGES ------->
                    <div class="message">
                        <div class="profile-photo">
                            <img src="./images/p18.jpeg">
                            <div class="active"></div>
                        </div>
                        <div class="message-body">
                            <h5>Anjali</h5>
                            <p class="text-bold">5 new messages</p>
                        </div>
                    </div>

                    </div>
                  
                   
                    
                
                <!------- END OF MESSAGES ------->

                <!------- FRIEND REQUEST ------->
  <div class="friend-requests">
    <h4>Requests</h4>
    <div class="request">
        <div class="info">
            <div class="profile-photo">
                <img src="./images/p10.jpeg">
            </div>
            <div>
                <h5>Krutarth</h5>
                <p class="text-muted">8 mutual friends</p>
            </div>
        </div>
        <div class="action">
            <button class="btn btn-primary accept-btn">
                Accept
            </button>
            <button class="btn decline-btn">
                Decline
            </button>
        </div>
    </div>
</div>

                    <div class="request">
                        <div class="info">
                            <div class="profile-photo">
                                <img src="./images/p11.jpeg">
                            </div>
                            <div>
                                <h5>Dev</h5>
                                <p class="text-muted">2 mutual friends</p>
                            </div>
                        </div>
                        <div class="action">
                            <button class="btn btn-primary accept-btn">
                                Accept
                            </button>
                            <button class="btn decline-btn">
                                Decline
                            </button>
                        </div>
                    </div>
                    <div class="request">
                        <div class="info">
                            <div class="profile-photo">
                                <img src="./images/p12.jpeg">
                            </div>
                            <div>
                                <h5>Yuvrajsinh</h5>
                                <p class="text-muted">5 mutual friends</p>
                            </div>
                        </div>
                        <div class="action">
                            <button class="btn btn-primary accept-btn">
                                Accept
                            </button>
                            <button class="btn decline-btn">
                                Decline
                            </button>
                        </div>
                    </div>
                </div>
            </div>

             
            <script>
    // JavaScript code

    
    const requests = document.querySelectorAll('.request');

    requests.forEach(request => {
        const acceptBtn = request.querySelector('.accept-btn');
        const declineBtn = request.querySelector('.decline-btn');

        acceptBtn.addEventListener('click', () => {
            acceptBtn.textContent = 'Accepted';
            acceptBtn.classList.add('accepted');
            declineBtn.remove();
        });

        declineBtn.addEventListener('click', () => {
            acceptBtn.textContent = 'Declined';
            acceptBtn.classList.add('declined');
            declineBtn.remove();
        });
    });
</script>

END OF MESSAGES ------->
           
            <!----------------- END OF RIGHT -------------------->
        </div>
    </main>

    <!----------------- THEME CUSTOMIZATION -------------------->
    <div class="customize-theme">
        <div class="card">
            <h2>Customize your view</h2>
            <p class="text-muted">Manage your font size, color, and background</p>

            <!----------- FONT SIZE ----------->
            <div class="font-size">
                <h4>Font Size</h4>
                <div>
                    <h6>Aa</h6>
                    <div class="choose-size">
                        <span class="font-size-1"></span>
                        <span class="font-size-2 active"></span>
                        <span class="font-size-3"></span>
                        <span class="font-size-4"></span>
                        <span class="font-size-5"></span>
                    </div>
                    <h3>Aa</h3>
                </div>
            </div>

            <!----------- PRIMARY COLORS ----------->
            <div class="color">
                <h4>Color</h4>
                <div class="choose-color">
                    <span class="color-1 active"></span>
                    <span class="color-2"></span>
                    <span class="color-3"></span>
                    <span class="color-4"></span>
                    <span class="color-5"></span>
                </div>
            </div>

            <!----------- BACKGROUND COLORS ----------->
            <div class="background">
                <h4>Background</h4>
                <div class="choose-bg">
                    <div class="bg-1 active">
                        <span></span>
                        <h5 for="bg-1">Light</h5>
                    </div>
                    <div class="bg-2">
                        <span></span>
                        <h5 for="bg-2">Dim</h5>
                    </div>
                    <div class="bg-3">
                        <span></span>
                        <h5 for="bg-3">Dark</h5>
                    </div>
                </div>
            </div>
        </div>
    </div> 

    <script src="./index.js"></script>
</body>
</html>