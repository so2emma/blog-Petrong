<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
<!-- <link href="{{asset('documentation/images/favicon.png')}}" rel="icon" /> -->
<title>Documentation</title>
<!-- <meta name="description" content="Your ThemeForest item Name and description">
<meta name="author" content="harnishdesign.net"> -->

<!-- Stylesheet
============================== -->
<!-- Bootstrap -->
<link rel="stylesheet" type="text/css" href="{{asset('documentation/vendor/bootstrap/css/bootstrap.min.css')}}" />
<!-- Font Awesome Icon -->
<link rel="stylesheet" type="text/css" href="{{asset('documentation/vendor/font-awesome/css/all.min.css')}}" />
<!-- Magnific Popup -->
<link rel="stylesheet" type="text/css" href="{{asset('documentation/vendor/magnific-popup/magnific-popup.min.css')}}" />
<!-- Highlight Syntax -->
<link rel="stylesheet" type="text/css" href="{{asset('documentation/vendor/highlight.js/styles/github.css')}}" />
<!-- Custom Stylesheet -->
<link rel="stylesheet" type="text/css" href="{{asset('documentation/css/stylesheet.css')}}" />
</head>

<body data-spy="scroll" data-target=".idocs-navigation" data-offset="125">

<!-- Preloader -->
<div class="preloader">
  <div class="lds-ellipsis">
    <div></div>
    <div></div>
    <div></div>
    <div></div>
  </div>
</div>
<!-- Preloader End --> 

<!-- Document Wrapper   
=============================== -->
<div id="main-wrapper"> 
  
  <!-- Header
  ============================ -->
  <header id="header" class="sticky-top"> 
    <!-- Navbar -->
    <nav class="primary-menu navbar navbar-expand-lg navbar-dropdown-dark">
      <div class="container-fluid">
        <!-- Sidebar Toggler -->
		<button id="sidebarCollapse" class="navbar-toggler d-block d-md-none" type="button"><span></span><span class="w-75"></span><span class="w-50"></span></button>
		
		<!-- Logo --> 
        <a class="logo ml-md-3" href="" title="">Documentation <img src="asset{{('assets/images/logo.png')}}" alt=""/> </a> 
		<!-- <span class="text-2 ml-2">v1.0</span>  -->
        <!-- Logo End -->
        
		<!-- Navbar Toggler -->
		<button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#header-nav"><span></span><span></span><span></span></button>
        
		<!-- <div id="header-nav" class="collapse navbar-collapse justify-content-end">
          <ul class="navbar-nav">
            <li><a target="_blank" href="">Other Template</a></li>
            <li><a target="_blank" href="">Support</a></li>
          </ul>
        </div>
        <ul class="social-icons social-icons-sm ml-lg-2 mr-2">
          <li class="social-icons-twitter"><a data-toggle="tooltip" href="http://www.twitter.com//" target="_blank" title="" data-original-title="Twitter"><i class="fab fa-twitter"></i></a></li>
          <li class="social-icons-facebook"><a data-toggle="tooltip" href="http://www.facebook.com//" target="_blank" title="" data-original-title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
          <li class="social-icons-dribbble"><a data-toggle="tooltip" href="http://www.dribbble.com//" target="_blank" title="" data-original-title="Dribbble"><i class="fab fa-dribbble"></i></a></li>
        </ul>
      </div>
    </nav> -->
    <!-- Navbar End --> 
  </header>
  <!-- Header End --> 
  
  <!-- Content
  ============================ -->
  <div id="content" role="main">
    
	<!-- Sidebar Navigation
	============================ -->
	<div class="idocs-navigation bg-light">
      <ul class="nav flex-column">
        <li class="nav-item"><a class="nav-link" href="#idocs_start">Getting Started</a></li>
        <li class="nav-item"><a class="nav-link" href="#idocs_installation">Settings</a></li>
        <li class="nav-item"><a class="nav-link" href="#idocs_html_structure">Dashboard</a></li>
        <li class="nav-item"><a class="nav-link" href="#idocs_sass">Posts</a></li>
        <li class="nav-item"><a class="nav-link" href="#idocs_color_schemes">Profile</a></li>
        <li class="nav-item"><a class="nav-link" href="#idocs_theme_customization">Authors</a></li>
        <li class="nav-item"><a class="nav-link" href="#idocs_logo_settings">Categories</a></li>
         
        <li class="nav-item"><a class="nav-link" href="#idocs_layout">Subscription</a></li>
        <li class="nav-item"><a class="nav-link" href="#idocs_header">Contact</a></li>
      
        <!-- <li class="nav-item"><a class="nav-link" href="#idocs_content">Content</a>
			    <ul class="nav flex-column">
            <li class="nav-item"><a class="nav-link" href="#idocs_typography">Typography</a></li>
            <li class="nav-item"><a class="nav-link" href="#idocs_code">Code</a></li>
            <li class="nav-item"><a class="nav-link" href="#idocs_table">Table</a></li>
            <li class="nav-item"><a class="nav-link" href="#idocs_icons">Icons</a></li>
                  <li class="nav-item"><a class="nav-link" href="#idocs_image">Image</a></li>
            <li class="nav-item"><a class="nav-link" href="#idocs_video">Video</a></li>
          </ul>
		    </li> -->
      </ul>
    </div>
    
    <!-- Docs Content
	============================ -->
    <div class="idocs-content">
      <div class="container"> 
        
        <!-- Getting Started
		============================ -->
        <section id="idocs_start">
        <h1>Documentation</h1>
        <h2>Welcome</h2>
        <p class="lead">Thank you so much for purchasing our item from Petrong Software Solution.</p>
		<hr>
		<div class="row">
			<div class="col-sm-6 col-lg-4">
				<ul class="list-unstyled">
					<li><strong>Version:</strong> 1.0</li>
					<li><strong>Author:</strong> <a href="" target="_blank">Petrong Software Solution</a></li>
				</ul>
			</div>
			<div class="col-sm-6 col-lg-4">
				<ul class="list-unstyled">
					<li><strong class="font-weight-700">Created:</strong> May, 2022</li>
					<!-- <li><strong>Update:</strong> 12 May, 2020</li> -->
				</ul>
			</div>
		</div>
        <p class="alert alert-info">You will be required to fill in the settings before you can proceed to view the website. Login with the details provided to access the settings page <a target="_blank" href="{{route('login')}}">Login</a>.</p>
        </section>
        
		<hr class="divider">
		
        <!-- Installation
		============================ -->
        <section id="idocs_installation">
            <h2>Settings</h2>
            <p class="lead">Follow the steps below to setup your site template:</p>
            <ol>
                <li>Here is what the settings page looks like.</li><br>
                <p><img class="img-fluid border" src="{{asset('documentation/images/blank-settings.png')}}" alt=""></p>
                <li>Fill in the company name in the company name field.
                <li>Fill in the company address in the company address field.
                <li>Upload the company logo in the company logo field.
                <li>You should click on the show company name checkbox if you want the company name to show in the website. Do the same for show company logo if you want it to show in the website. You can click on both checkboxes if you want both to show in the website.</li>
                <li>Fill in the company email in the company email field.
                <li>Fill in what you want to share about the company in the company about field. This will be shown on the about page.
                <li>Upload the image you want to accompany the writeup about the company in the company about image field. This will be shown on the about page.
                <li>Fill in what you want to share about the company's vission and mission in the company vission and mission field. This will be shown on the about page.
                <li>Upload the image you want to accompany the writeup about the company's vission and mission in the company vission and mission image field. This will be shown on the about page.
                <li>You should click on the enable blog checkbox if you want to make use of the template as a blog.
                <li>In the socials section which is the only part of the form that is not compulsory, fill in the company's facebook, instagram, twitter and linkedin addresses in their corresponding fields.
                <li>After filling the form, click on update shown below to save your data. When the update is successful, you get a message on the top of the form to that effect.<br>
                <p><img class="img-fluid border" src="{{asset('documentation/images/update-settings.png')}}" alt=""></p>
                <li>Now you can click on the go to web tab on the sidebar shown below to view the homepage. Consequently when you visit the site you will be shown the home page.<br>
                <p><img class="img-fluid border mx-auto d-block" src="{{asset('documentation/images/goto-web.png')}}" alt=""></p>
                
            </ol>
          
        </section>
        
		<hr class="divider">
		
        <!-- HTML Structure
		============================ -->
        <section id="idocs_html_structure">
          <h2>Dashboard</h2>
          <p>The dashboard is the default page on the admin section.<br>
          It shows the no of authors, posts and subscribers. You can also see in one glance the no of posts that has been under each category. A screenshot is shown below.
          <p><img class="img-fluid border" src="{{asset('documentation/images/dashboard.png')}}" alt=""></p>
          
        </section>
        
		<hr class="divider">
		        
		<!-- Sass
		============================ -->
        <section id="idocs_sass">
          <h2>Posts</h2>
          <p>When you click on the posts in the side bar, you see a page that shows all the posts that has been created. To create a new post, click on the new button on the top right corner as shown below.
              You can also edit and delete any posts as desired.
            </p>
            <p>The posts section can be used to create blog, services or add team members(this is only when the subtitle field is used.)
            <p><img class="img-fluid border" src="{{asset('documentation/images/posts.png')}}" alt=""></p>
          <p>On the create post page, you will see a form with an upload post button and a 'back' button in the top right hand corner that leads to the previous page as shown below. </p>
          <p><img class="img-fluid border" src="{{asset('documentation/images/create-post.png')}}" alt=""></p>
          <p>To add a new post or service or team member;
            <ul>
              <ol>Fill in the title in the title field. This is the field for full name when adding team members.</ol>
              <ol>Fill in the subtitle in the subtitle field. This is the field for job title when adding team members.</ol>
              <ol>Fill in the content in the content field. This is the field for describing the individual when adding team members.</ol>
              <ol>Add your desired image in the picture field. This is the field for adding the individual's picture when adding team members.</ol>
              <ol>Select the exact category you want the post to belong to in the 'select category' field. Here you select team when adding team members. Note; you can add more categories, details in the categories section below.</ol>
              <ol>Then click on the 'upload post' button to add the new post.</ol>
              <ol>When done correctly, You get a success message and an email is sent to subscribers when a new post is added if it is a blog.</ol>
            </ul>
          </p>
          <p>To edit, click on the edit button shown above on the posts page. You will see a page similar to the create posts page.</p>
          <p>Change whichever field you want, upload your desired picture and click on the 'edit post' button. A sample page is shown below.</p>
          <p><img class="img-fluid border" src="{{asset('documentation/images/edit-post.png')}}" alt=""></p>
          <p>To delete a post, Click on the delete button. You will get a message to confirm if you want to delete as shown below. Click ok if you want to proceed and cancel if you do not want to delete the post any longer.</p>
          
          <p><img class="img-fluid border" src="{{asset('documentation/images/delete-post.png')}}" alt=""></p>
        </section>
        
		<hr class="divider">
		
		<!-- Color Schemes
		============================ -->
        <section id="idocs_color_schemes">
          <h2>Profile</h2>
          <p>When you click on profile in the sidebar, you see the page shown below where you can update your profile information, picture and reset your password. </p>
          <p><img class="img-fluid border" src="{{asset('documentation/images/profile.png')}}" alt=""></p>
          <p>To update your profile,</p>
          <ul>
            <ol>Fill in your full name in the full name field.</ol>
            <ol>Fill in your email address in the email field.</ol>
            <ol>Fill in your phone no in the phone no field.</ol>
            <ol>Fill in a description of yourself in the description field.</ol>
            <ol>Select your country in the select country field.</ol>
            <ol>Then click on the 'update profile' button to update your profile information. You receive a success message when the update is successful.</ol>
            <ol>Fill in your full name in the full name field.</ol>
          </ul>
          <p>To update your profile picture,</p>
          <ul>
            <ol>Click on the 'browse button' to add your desired picture under the profile image.</ol>
            <ol>Then click on the 'update picture' button to update your picture. You receive a success message when the update is successful.</ol>
            
          </ul>
          <p>To reset your password,</p>
          <ul>
            <ol>Fill in your current password in the current password field.</ol>
            <ol>Fill in your new password in the new password field.</ol>
            <ol>Fill in your new password in the confirm new password field.</ol>
            <ol>Then click on the 'change' button to reset your password. You receive a success message when the reset is successful.</ol>
            
          </ul>
        
		<hr class="divider">
		
		<!-- Customization
		============================ -->
        <section id="idocs_theme_customization">
          <h2>Authors</h2>
          <p>When you click on authors in the side bar, you see a page that shows all the authors that has been created. To create a new author, click on the new button on the top right corner as shown below.
              Only the admin is allowed to view this section.
          </p>
            
          <p><img class="img-fluid border" src="{{asset('documentation/images/authors.png')}}" alt=""></p>
          <p>On the 'create author' page, you will see a form with a 'create author' button and a 'back' button in the top right hand corner that leads to the previous page as shown below. </p>
          <p><img class="img-fluid border" src="{{asset('documentation/images/create-author.png')}}" alt=""></p>
          <p>To add a new author;
            <ul>
              <ol>Fill in the full name in the full name field.</ol>
              <ol>Fill in the email in the email field.</ol>
              <ol>Fill in the password in the password field.</ol>
              <ol>Fill in the phone no in the phone no field.</ol>
              <ol>Fill in the role in the role field.</ol>
              <ol>Fill in the facebook address in the facebook field.</ol>
              <ol>Fill in the twitter address in the twitter field.</ol>
              <ol>Fill in the instagram address in the instagram field.</ol>
              <ol>Fill in the linkedin address in the linkedin field.</ol>
              <ol>Then click on the 'create author' button to add the new author.</ol>
              <ol>When done correctly, You get a success message and an email containing login details is sent to the author.</ol>
            </ul>
          </p>
          <p>To edit, click on the edit button shown above on the authors page. You will see a page similar to the create author page.</p>
          <p>Change whichever field you want, and click on the 'update' button. A sample page is shown below.</p>
          <p><img class="img-fluid border" src="{{asset('documentation/images/edit-author.png')}}" alt=""></p>
          <p>To delete an author, Click on the delete button. You will get a message to confirm if you want to delete as shown below. Click ok if you want to proceed and cancel if you do not want to delete the author any longer.</p>
          
          <p><img class="img-fluid border" src="{{asset('documentation/images/delete-author.png')}}" alt=""></p>
        </section>
        
		<hr class="divider">
		
        <!-- Logo Settings
		============================ -->
        <section id="idocs_logo_settings">
          <h2>Categories</h2>
          
          <p>When you click on categories in the side bar, you see a page that shows all the categories that has been created. The first three categories are constant and cannot be edited or deleted. To add a new category, click on the new button on the top right corner as shown below.
              Only the admin is allowed to view this section.
          </p>
            
          <p><img class="img-fluid border" src="{{asset('documentation/images/categories.png')}}" alt=""></p>
          <p>On the 'create category' page, you will see a form with a 'upload category' button and a 'back' button in the top right hand corner that leads to the previous page as shown below. </p>
          <p><img class="img-fluid border" src="{{asset('documentation/images/create-category.png')}}" alt=""></p>
          <p>To add a new category;
            <ul>
              <ol>Fill in the name in the name field.</ol>
              <ol>Then click on the 'upload category' button to add the new category.</ol>
              <ol>When done correctly, You get a success message.</ol>
            </ul>
          </p>
          <p>To edit, click on the edit button shown above on the categories page. You will see a page similar to the create category page.</p>
          <p>Change whichever field you want, and click on the 'update' button. A sample page is shown below.</p>
          <p><img class="img-fluid border" src="{{asset('documentation/images/edit-category.png')}}" alt=""></p>
          <p>To delete an category, Click on the delete button. You will get a message to confirm if you want to delete as shown below. Click ok if you want to proceed and cancel if you do not want to delete the category any longer.</p>
          
          <p><img class="img-fluid border" src="{{asset('documentation/images/delete-category.png')}}" alt=""></p>
        </section>
        
		<hr class="divider">
		
		<!-- Layout
		============================ -->
        <section id="idocs_layout">
          <h2>Subscription</h2>
          <p>The subcription form is at the bottom of every page as shown below. Everyone who subscribes is notified via email when a new post is created.</p>
          <p><img class="img-fluid border" src="{{asset('documentation/images/subscribe.png')}}" alt=""></p>
        </section>
		
		
        <!-- Header
		============================ -->
        <section id="idocs_header">
          <h2>Contact</h2>
          <p>The contact page on the website contains a form as shown below. Any message sent from this form goes directly to the email of the admin. </p>
          <p><img class="img-fluid border" src="{{asset('documentation/images/contact.png')}}" alt=""></p>
          
          
		
		
		
		
		<hr class="divider">
		
     
<!-- Document Wrapper end --> 

<!-- Back To Top --> 
<a id="back-to-top" data-toggle="tooltip" title="Back to Top" href="javascript:void(0)"><i class="fa fa-chevron-up"></i></a> 

<!-- JavaScript
============================ -->
<script src="{{asset('documentation/vendor/jquery/jquery.min.js')}}"></script> 
<script src="{{asset('documentation/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script> 
<!-- Highlight JS -->
<script src="{{asset('documentation/vendor/highlight.js/highlight.min.js')}}"></script> 
<!-- Easing --> 
<script src="{{asset('documentation/vendor/jquery.easing/jquery.easing.min.js')}}"></script> 
<!-- Magnific Popup --> 
<script src="{{asset('documentation/vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script> 
<!-- Custom Script -->
<script src="{{asset('documentation/js/theme.js')}}"></script>
</body>
</html>
