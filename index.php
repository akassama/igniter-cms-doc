<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->

<head>

    <!-- Essential Meta Tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Title and Description -->
    <title>Igniter CMS | Documentation</title>
    <meta name="description" content="Igniter CMS Documentation Site">

    <!-- Keywords for SEO -->
    <meta name="keywords" content="Igniter CMS, CodeIgniter CMS, PHP CMS, Open Source CMS, Content Management System, Igniter, CMS, CodeIgniter">

    <!-- Author Information -->
    <meta name="author" content="Igniter CMS Team">

    <!-- Open Graph (Facebook) -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="Igniter CMS | Documentation">
    <meta property="og:description" content="Igniter CMS Documentation Site">
    <meta property="og:url" content="https://docs.ignitercms.com/">
    <meta property="og:image" content="images/igniter-cms-dashboard.png">
    <meta property="og:site_name" content="Igniter CMS">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Igniter CMS | Documentation">
    <meta name="twitter:description" content="Igniter CMS Documentation Site">
    <meta name="twitter:image" content="images/igniter-cms-dashboard.png">
    <meta name="twitter:site" content="@IgniterCMS">

    <!-- Canonical URL -->
    <link rel="canonical" href="https://docs.ignitercms.com/">

    <!-- Robots and Indexing -->
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">

    <!-- Additional SEO Meta Tags -->
    <meta name="theme-color" content="#ff6b35">
    <meta name="msapplication-TileColor" content="#ff6b35">

    <!-- Favicon and Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="48x48" href="images/favicon/favicon-48x48.png">
    <link rel="icon" type="image/svg+xml" href="images/favicon/favicon.svg" />
    <link rel="shortcut icon" href="images/favicon/favicon.ico" />
    <link rel="manifest" href="images/favicon/site.webmanifest" />

    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/stroke.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/prettyPhoto.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <link rel="stylesheet" type="text/css" href="js/syntax-highlighter/styles/shCore.css" media="all">
    <link rel="stylesheet" type="text/css" href="js/syntax-highlighter/styles/shThemeRDark.css" media="all">
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.min.css"/>

    <!-- CUSTOM -->
    <link rel="stylesheet" type="text/css" href="css/custom.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Structured Data (JSON-LD) for Rich Snippets -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "SoftwareApplication",
      "name": "Igniter CMS",
      "url": "https://docs.ignitercms.com",
      "description": "A robust and flexible Content Management System powered by CodeIgniter 4.",
      "applicationCategory": "WebApplication",
      "operatingSystem": "Web",
      "offers": {
        "@type": "Offer",
        "price": "0",
        "priceCurrency": "USD"
      },
      "author": {
        "@type": "Organization",
        "name": "Igniter CMS"
      },
      "image": "images/igniter-cms-dashboard.png"
    }
    </script>
</head>

<body>
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-chevron-up" aria-hidden="true"></i></button>

    <script>
        var mybutton = document.getElementById("myBtn");
        window.onscroll = function() {scrollFunction()};
        function scrollFunction() {
            if (document.body.scrollTop > 1000 || document.documentElement.scrollTop > 1000) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }
        function topFunction() {
            window.scrollTo({ top: 0, behavior: 'smooth' })
            document.documentElement.scrollTo({ top: 0, behavior: 'smooth' })
        }

        document.addEventListener("DOMContentLoaded", () => {
            document.querySelector('#mode').addEventListener('click',()=>{
                document.querySelector('html').classList.toggle('dark');
            })
        });


    </script>

    <div id="wrapper">

        <div id="mode" >
            <div class="dark">
                <svg aria-hidden="true" viewBox="0 0 512 512">
                    <title>lightmode</title>
                    <path fill="currentColor" d="M256 160c-52.9 0-96 43.1-96 96s43.1 96 96 96 96-43.1 96-96-43.1-96-96-96zm246.4 80.5l-94.7-47.3 33.5-100.4c4.5-13.6-8.4-26.5-21.9-21.9l-100.4 33.5-47.4-94.8c-6.4-12.8-24.6-12.8-31 0l-47.3 94.7L92.7 70.8c-13.6-4.5-26.5 8.4-21.9 21.9l33.5 100.4-94.7 47.4c-12.8 6.4-12.8 24.6 0 31l94.7 47.3-33.5 100.5c-4.5 13.6 8.4 26.5 21.9 21.9l100.4-33.5 47.3 94.7c6.4 12.8 24.6 12.8 31 0l47.3-94.7 100.4 33.5c13.6 4.5 26.5-8.4 21.9-21.9l-33.5-100.4 94.7-47.3c13-6.5 13-24.7.2-31.1zm-155.9 106c-49.9 49.9-131.1 49.9-181 0-49.9-49.9-49.9-131.1 0-181 49.9-49.9 131.1-49.9 181 0 49.9 49.9 49.9 131.1 0 181z"></path>
                </svg>
            </div>
            <div class="light">
                <svg aria-hidden="true" viewBox="0 0 512 512">
                    <title>darkmode</title>
                    <path fill="currentColor" d="M283.211 512c78.962 0 151.079-35.925 198.857-94.792 7.068-8.708-.639-21.43-11.562-19.35-124.203 23.654-238.262-71.576-238.262-196.954 0-72.222 38.662-138.635 101.498-174.394 9.686-5.512 7.25-20.197-3.756-22.23A258.156 258.156 0 0 0 283.211 0c-141.309 0-256 114.511-256 256 0 141.309 114.511 256 256 256z"></path>
                </svg>
            </div>
        </div>

        <div class="container">

            <section id="top" class="section docs-heading">

                <div class="row">
                    <div class="col-md-12">
                        <div class="big-title text-center">
                            <h1>Igniter CMS Documentation</h1>
                            <p class="lead">Comprehensive Documentation - Version 2.0</p>
                        </div>
                        <!-- end title -->
                    </div>
                    <!-- end 12 -->
                    <div class="col-md-3">
                        <label for="version" class="form-label">Select version:</label>
                            <select class="form-control" id="version" name="version" onfocus="this.selectedIndex = 0" onchange='location = this.options[this.selectedIndex].value;'>
                            <option value='https://docs.ignitercms.com/version-1.0.php'>1.0</option>
                            <option value='https://docs.ignitercms.com/' selected>2.0</option>
                        </select>
                    </div>
                </div>
                <!-- end row -->
                <hr>
            </section>
            <!-- end section -->

            <div class="row">
                <div class="col-md-3">
                    <nav class="docs-sidebar" data-spy="affix" data-offset-top="300" data-offset-bottom="200" role="navigation">
                        <ul class="nav">
                            <li><a href="#installation-setup">Installation/Setup</a>
                                <ul class="nav">
                                    <li><a href="#requirements">Requirements</a></li>
                                    <li><a href="#installation-steps">Installation Steps</a></li>
                                    <li><a href="#permissions">Permissions</a></li>
                                    <li><a href="#environment-configuration">Environment Configuration</a></li>
                                </ul>
                            </li>
                            <li><a href="#dashboard">Dashboard</a></li>
                            <li><a href="#cms">CMS Module</a>
                                <ul class="nav">
                                    <li><a href="#blogs">Blogs</a></li>
                                    <li><a href="#categories">Categories</a></li>
                                    <li><a href="#navigations">Navigations</a></li>
                                    <li><a href="#pages">Pages</a></li>
                                    <li><a href="#data-groups">Data Groups</a></li>
                                </ul>
                            </li>
                            <li><a href="#file-manager">File Manager</a></li>
                            <li><a href="#content-blocks">Content Blocks</a></li>
                            <li><a href="#appearance">Appearance</a>
                                <ul class="nav">
                                    <li><a href="#manage-themes">Themes</a></li>
                                    <li><a href="#theme-editor">Theme Editor</a></li>
                                </ul>
                            </li>
                            <li><a href="#settings">Settings</a>
                                <ul class="nav">
                                    <li><a href="#update-details">Update Details</a></li>
                                    <li><a href="#change-password">Change Password</a></li>
                                </ul>
                            </li>
                            <li><a href="#admin">Admin Management</a>
                                <ul class="nav">
                                    <li><a href="#manage-users">Manage Users</a></li>
                                    <li><a href="#configurations">Configurations</a></li>
                                    <li><a href="#codes">Codes</a></li>
                                    <li><a href="#api-keys">API Keys</a></li>
                                    <li><a href="#activity-logs">Activity Logs</a></li>
                                    <li><a href="#logs">Logs</a></li>
                                    <li><a href="#visit-stats">Visit Stats</a></li>
                                    <li><a href="#blocked-ips">Blocked IP's</a></li>
                                    <li><a href="#whitelisted-ips">Whitelisted IP's</a></li>
                                    <li><a href="#backups">Backups</a></li>
                                </ul>
                            </li>
                            <li><a href="#plugins">Plugins</a>
                                <ul class="nav">
                                    <li><a href="#manage-plugin">Manage Plugins</a></li>
                                    <li><a href="#plugin-configurations">Plugin Configurations</a></li>
                                </ul>
                            </li>
                            <li><a href="#ai-assistance">AI Assistance</a>
                                <ul class="nav">
                                    <li><a href="#ask-ai">Ask AI</a></li>
                                    <li><a href="#ai-text-generation">AI Text Generation</a></li>
                                    <li><a href="#ai-analysis">AI Data Analysis & Analytics</a></li>
                                </ul>
                            </li>
                            <li><a href="#deployment-instructions">Deployment Instructions</a>
                                <ul class="nav">
                                    <li><a href="#ftp-deployment">FTP Deployment</a></li>
                                    <li><a href="#cicd-deployment">CI/CD Pipeline</a></li>
                                    <li><a href="#file-upload">File Upload</a></li>
                                </ul>
                            </li>
                            <li><a href="#for-developers">For Developers</a>
                                <ul class="nav">
                                    <li><a href="#endpoints">API Endpoints</a></li>
                                    <li><a href="#model-names">Model Names</a></li>
                                    <li><a href="#model-attributes">Model Attributes</a></li>
                                    <li><a href="#app-messages">App Messages</a></li>
                                    <li><a href="#activity-types-message">Activity Types Message</a></li>
                                    <li><a href="#theme-files">Theme Files</a></li>
                                </ul>
                            </li>
                            <li><a href="#copyright-license">Copyright and license</a></li>
                        </ul>
                    </nav >
                </div>
                <div class="col-md-9">
                    <section class="welcome">

                        <div class="row">
                            <div class="col-md-12 left-align">
                               <h2 class="dark-text">Introduction<hr></h2>
                                <div class="row">

                                    <div class="col-md-12 full">
                                        <div class="intro1">
                                            <ul>
                                                <li><strong>Item Name : </strong>Igniter CMS Starter Application</li>
                                                <li><strong>Item Version : </strong> v 1.2</li>
                                                <li><strong>Author  : </strong> <a href="https://github.com/akassama" target="_blank">A. Kassama</a></li>
                                                <li><strong>Support Email : </strong> <a href="#" >kassamadeveloper(at)gmail.com</a></li>
                                                <li><strong>License : </strong> <a href="https://mit-license.org/" target="_blank">MIT License</a></li>
                                                <li><a href="https://github.com/akassama/igniter-cms/archive/refs/heads/main.zip" download>Download</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <!-- end row -->
                            </div>
                        </div>
                    </section>

                    <section id="installation-setup">
                        <h2>Installation/Setup</h2>
                        <section id="requirements">
                            <h3>Requirements</h3>
                            <ul>
                                <li>PHP (recommended version: 8.0 or higher)</li>
                                <li>Enable `zip` and `gd` extension in php ini</li>
                                <li>Composer installed.</li>
                                <li>MySQL, Postgre, SQLite or another supported database</li>
                                <li>Web server (Apache, Nginx, etc.)</li>
                            </ul>
                        </section>
                        <section id="installation-steps">
                            <h3>Installation Steps</h3>
                            <ol>
                                <li>Clone or download the project from the repository (<a href="https://github.com/akassama/igniter-cms">GitHub</a>).</li>
                                <li>Navigate to the project folder and run <code>composer install</code> to install dependencies.</li>
                                <li>Set the database config in the <code>.env</code> file to configure environment and database settings.</li>
                                <li>Set the base URL in <code>.env</code> file. <code>app.baseURL = 'http://localhost/igniter-cms/'</code></li>
								<li>Make sure you create the database in your local server.</li>
                                <li>Generate App Key: <code>php spark generate:key</code>. This command will generate/update the application key (APP_KEY) in .env file.</li>
                                <li>Run database migrations with <code>php spark migrate</code>.</li>
                                <li>Open the base url in browser. E.g. <code>https://localhost/igniter-cms/</code>.</li>
                            </ol>
                            <p>
                                Note: To reset database you can use these commands <code>php spark delete:tables</code> and <code>php spark migrate</code>
                            </p>
                        </section>
                        <section id="permissions">
                            <h3>Permissions</h3>
                            <p>Ensure <code>writable</code> and <code>public/uploads</code> directories are writable by the web server.</p>
                        </section>
                    </section>
                    
                    <section id="dashboard">
                        <h2>Dashboard</h2>
                        <p>The dashboard is the landing page of the backend and includes the following features:</p>
                        <div class="row">
                            <div class="col-12">
                                <a href="images/upload/version-2.0/dashboard.png" data-rel="prettyPhoto">
                                    <img src="images/upload/version-2.0/dashboard.png" alt="" class="img-responsive img-thumbnail">
                                </a>
                            </div>
                        </div>
                        <ul>
                            <li>Summary cards of total Users, Blogs, Pages, and Themes.</li>
                            <li>Site Analytics:
                                <ul>
                                    <li>Recent Visits (Last 7 Days - Chart).</li>
                                    <li>Recent Visits (Last 6 Months - Chart).</li>
                                    <li>Most Pages Visited (Table).</li>
                                    <li>Top Browsers (Table).</li>
                                </ul>
                            </li>
                            <li>Table of Recent Posts (10).</li>
                        </ul>
                    </section>

                    <section id="cms" class="section">
                        <h2>CMS Management</h2>
                        <p>The CMS module allows you to manage the website's content, including blogs, pages, and navigations.</p>

                        <div class="row">
                            <div class="col-12">
                                <a href="images/upload/version-2.0/cms.png" data-rel="prettyPhoto">
                                    <img src="images/upload/version-2.0/cms.png" alt="" class="img-responsive img-thumbnail">
                                </a>
                            </div>
                        </div>
                        <section id="blogs">
                            <h3>Blogs</h3>
                            <p>Create, update, and remove blogs. Features include:</p>
                            <div class="col-12">
                                <a href="images/upload/version-2.0/blogs.png" data-rel="prettyPhoto">
                                    <img src="images/upload/version-2.0/blogs.png" alt="" class="img-responsive img-thumbnail">
                                </a>
                            </div>
                            <ul>
                                <li>Form for blog details, including title, content, and tags.</li>
                                <li>Slug generation from the title.</li>
                                <li>Image selection via input icon (copy file path under the "Actions" tab).</li>
                                <li>Category selection and SEO data customization.</li>
                                <li>Status toggles (e.g., Published or Draft).</li>
                            </ul>
                        </section>
                        
                        <section id="categories">
                            <h3>Categories</h3>
                            <p>Manage blog categories. Features include:</p>
                            <div class="row">
                                <div class="col-12">
                                    <a href="images/upload/version-2.0/categories.png" data-rel="prettyPhoto">
                                        <img src="images/upload/version-2.0/categories.png" alt="" class="img-responsive img-thumbnail">
                                    </a>
                                </div>
                            </div>
                            <ul>
                                <li>Create, update, and remove categories.</li>
                            </ul>
                        </section>
                        
                        <section id="navigations">
                            <h3>Navigations</h3>
                            <p>Manage site navigations. Features include:</p>
                            
                            <div class="row">
                                <div class="col-12">
                                    <a href="images/upload/version-2.0/navigation.png" data-rel="prettyPhoto">
                                        <img src="images/upload/version-2.0/navigation.png" alt="" class="img-responsive img-thumbnail">
                                    </a>
                                </div>
                            </div>
                            <ul>
                                <li>Create, update, and remove navigations.</li>
                                <li>Assign "group" for filtering or selection.</li>
                                <li>Set parent navigation to create sub-navigations.</li>
                            </ul>
                        </section>
                        
                        <section id="pages">
                            <h3>Pages</h3>
                            <p>Create, update, and remove pages. Features include:</p>
                            
                            <div class="row">
                                <div class="col-12">
                                    <a href="images/upload/version-2.0/pages.png" data-rel="prettyPhoto">
                                        <img src="images/upload/version-2.0/pages.png" alt="" class="img-responsive img-thumbnail">
                                    </a>
                                </div>
                            </div>
                            <ul>
                                <li>Form for page details, including title and content.</li>
                                <li>Slug generation from the title.</li>
                                <li>SEO data customization.</li>
                                <li>Status toggles (e.g., Published or Draft).</li>
                            </ul>
                        </section>

                        <section id="data-groups">
                            <h3>Data Groups</h3>
                            <p>Organize and manage structured data entries for various purposes. Features include:</p>

                            <div class="row">
                                <div class="col-12">
                                    <a href="images/upload/version-2.0/data-groups.png" data-rel="prettyPhoto">
                                        <img src="images/upload/version-2.0/data-groups.png" alt="" class="img-responsive img-thumbnail">
                                    </a>
                                </div>
                            </div>
                            <ul>
                                <li>Form for data group details.</li>
                                <li>Structured data categorization.</li>
                                <li>Export options for analytics.</li>
                                <li>Fetching filters (e.g., for different themes).</li>
                            </ul>
                        </section>
                    </section>

                    <section id="file-manager" class="section">
                        <div class="row">
                            <div class="col-md-12 left-align">
                                <h2 class="dark-text">File Manager <hr></h2>
                                <p>Upload, manage, and organize files (images, videos, audios, documents, etc.) for use within the application.</p>
                                <div class="row">
                                    <div class="col-12">
                                        <a href="images/upload/version-2.0/files.png" data-rel="prettyPhoto">
                                            <img src="images/upload/version-2.0/files.png" alt="" class="img-responsive img-thumbnail">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <p>Upload, manage, and organize files, including images and documents.</p>
                            </div>
                        </div>
                    </section>

                    <section id="content-blocks" class="section">
                        <div class="row">
                            <div class="col-md-12 left-align">
                                <h3>Content Blocks</h3>
                                <p>Create reusable content blocks for other parts of the website.</p>
                                <div class="row">
                                    <div class="col-12">
                                        <a href="images/upload/version-2.0/content-blocks.png" data-rel="prettyPhoto">
                                            <img src="images/upload/version-2.0/content-blocks.png" alt="" class="img-responsive img-thumbnail">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section id="appearance">
                        <h2>Appearance</h2>
                        <section id="manage-themes">
                            <h3>Themes</h3>
                            <p>Manage application themes here. Add, Active or remove themes.</p>
                            <div class="row">
                                <div class="col-12">
                                    <a href="images/upload/version-2.0/themes.png" data-rel="prettyPhoto">
                                        <img src="images/upload/version-2.0/themes.png" alt="" class="img-responsive img-thumbnail">
                                    </a>
                                </div>
                            </div>
                        </section>
                        <section id="theme-editor">
                            <h3>Theme Editor</h3>
                            <p>Edit theme files here. Uses code editor to edit file contents.</p>
                            <div class="row">
                                <div class="col-12">
                                    <a href="images/upload/version-2.0/file-editor.png" data-rel="prettyPhoto">
                                        <img src="images/upload/version-2.0/file-editor.png" alt="" class="img-responsive img-thumbnail">
                                    </a>
                                </div>
                            </div>
                        </section>
                    </section>

                    <section id="settings">
                        <h2>Settings</h2>
                        <p>This is the module for managing your account details and changing passwords</p>
                        <div class="row">
                            <div class="col-12">
                                <a href="images/upload/version-2.0/settings.png" data-rel="prettyPhoto">
                                    <img src="images/upload/version-2.0/settings.png" alt="" class="img-responsive img-thumbnail">
                                </a>
                            </div>
                        </div>
                        <section id="update-details">
                            <h3>Update Details</h3>
                            <p>Update your account information (name, bio, etc.).</p>
                            <div class="row">
                                <div class="col-12">
                                    <a href="images/upload/version-2.0/account-details.png" data-rel="prettyPhoto">
                                        <img src="images/upload/version-2.0/account-details.png" alt="" class="img-responsive img-thumbnail">
                                    </a>
                                </div>
                            </div>
                        </section>
                        <section id="change-password">
                            <h3>Change Password</h3>
                            <p>Change your account password.</p>
                            <div class="row">
                                <div class="col-12">
                                    <a href="images/upload/version-2.0/change-password.png" data-rel="prettyPhoto">
                                        <img src="images/upload/version-2.0/change-password.png" alt="" class="img-responsive img-thumbnail">
                                    </a>
                                </div>
                            </div>
                        </section>
                    </section>

                    <section id="admin" class="section">
                        <h2>Admin Management</h2>
                        <p>The Admin module provides features for managing users, system configurations, and website functionality.</p>
                        <div class="row">
                            <div class="col-12">
                                <a href="images/upload/version-2.0/admin.png" data-rel="prettyPhoto">
                                    <img src="images/upload/version-2.0/admin.png" alt="" class="img-responsive img-thumbnail">
                                </a>
                            </div>
                        </div>
                    
                        <section id="manage-users">
                            <h3>Manage Users</h3>
                            <p>Create, edit, and manage user accounts and their permissions.</p>
                            <div class="row">
                                <div class="col-12">
                                    <a href="images/upload/version-2.0/users.png" data-rel="prettyPhoto">
                                        <img src="images/upload/version-2.0/users.png" alt="" class="img-responsive img-thumbnail">
                                    </a>
                                </div>
                            </div>
							<div class="row mt-2">
								<h3>Account Roles</h3>
								<div class="col-12">
									<table class="table table-bordered">
										<thead class="table-light">
											<tr>
												<th>Module</th>
												<th>Admin</th>
												<th>Manager</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Dashboard</td>
												<td><i class="ri-check-line text-success"></i></td>
												<td><i class="ri-check-line text-success"></i></td>
											</tr>
											<tr>
												<td>
													CMS
													<ul class="list-unstyled ms-3 small">
														<li>- Blogs</li>
														<li>- Categories</li>
														<li>- Navigations</li>
														<li>- Pages</li>
														<li>- Content Blocks</li>
														<li>- DataGroups</li>
													</ul>
												</td>
												<td><i class="ri-check-line text-success"></i></td>
												<td><i class="ri-check-line text-success"></i></td>
											</tr>
											<tr>
												<td>File Manager</td>
												<td><i class="ri-check-line text-success"></i></td>
												<td><i class="ri-check-line text-success"></i></td>
											</tr>
											<tr>
												<td>
													Settings
													<ul class="list-unstyled ms-3 small">
														<li>- Update Details</li>
														<li>- Change Password</li>
													</ul>
												</td>
												<td><i class="ri-check-line text-success"></i></td>
												<td><i class="ri-check-line text-success"></i></td>
											</tr>
											<tr>
												<td>
													Admin
													<ul class="list-unstyled ms-3 small">
														<li>- Users</li>
														<li>- Configurations</li>
														<li>- Codes</li>
														<li>- API Keys</li>
														<li>- Activity Logs</li>
														<li>- Logs</li>
														<li>- Visit Stats</li>
														<li>- Blocked IP's</li>
														<li>- Whitelisted IP's</li>
														<li>- Backups</li>
													</ul>
												</td>
												<td><i class="ri-check-line text-success"></i></td>
												<td><i class="ri-close-line text-danger"></i></td>
											</tr>
											<tr>
												<td>Manage Themes</td>
												<td><i class="ri-check-line text-success"></i></td>
												<td><i class="ri-check-line text-success"></i></td>
											</tr>
											<tr>
												<td>Plugins</td>
												<td><i class="ri-check-line text-success"></i></td>
												<td><i class="ri-close-line text-danger"></i></td>
											</tr>
											<tr>
												<td>Documentation</td>
												<td><i class="ri-check-line text-success"></i></td>
												<td><i class="ri-check-line text-success"></i></td>
											</tr>
											<tr>
												<td>AI Assistance</td>
												<td><i class="ri-check-line text-success"></i></td>
												<td><i class="ri-check-line text-success"></i></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
                        </section>
                    
                        <section id="configurations">
                            <h3>Configurations</h3>
                            <p>Adjust application settings and configurations to suit your needs.</p>
                            <div class="row">
                                <div class="col-12">
                                    <a href="images/upload/version-2.0/configurations.png" data-rel="prettyPhoto">
                                        <img src="images/upload/version-2.0/configurations.png" alt="" class="img-responsive img-thumbnail">
                                    </a>
                                </div>
                            </div>
                        </section>
                    
                        <section id="codes">
                            <h3>Codes</h3>
                            <p>Edit header and footer JavaScript as well as custom CSS.</p>
                            <div class="row">
                                <div class="col-12">
                                    <a href="images/upload/version-2.0/codes.png" data-rel="prettyPhoto">
                                        <img src="images/upload/version-2.0/codes.png" alt="" class="img-responsive img-thumbnail">
                                    </a>
                                </div>
                            </div>
                        </section>
                    
                        <section id="api-keys">
                            <h3>API Keys</h3>
                            <p>Generate and manage API keys for accessing CMS data via the API.</p>
                            <div class="row">
                                <div class="col-12">
                                    <a href="images/upload/version-2.0/api-keys.png" data-rel="prettyPhoto">
                                        <img src="images/upload/version-2.0/api-keys.png" alt="" class="img-responsive img-thumbnail">
                                    </a>
                                </div>
                            </div>
                        </section>
                    
                        <section id="activity-logs">
                            <h3>Activity Logs</h3>
                            <p>View a history of user actions and system events for tracking changes.</p>
                            <div class="row">
                                <div class="col-12">
                                    <a href="images/upload/version-2.0/activity-logs.png" data-rel="prettyPhoto">
                                        <img src="images/upload/version-2.0/activity-logs.png" alt="" class="img-responsive img-thumbnail">
                                    </a>
                                </div>
                            </div>
                        </section>

                        <section id="logs">
                            <h3>Logs</h3>
                            <p>Track system events and actions with detailed logs. Features include:</p>

                            <div class="row">
                                <div class="col-12">
                                    <a href="images/upload/version-2.0/logs.png" data-rel="prettyPhoto">
                                        <img src="images/upload/version-2.0/logs.png" alt="" class="img-responsive img-thumbnail">
                                    </a>
                                </div>
                            </div>
                            <ul>
                                <li>Detailed logs for system events.</li>
                                <li>Export functionality.</li>
                                <li>Error tracking.</li>
                            </ul>
                        </section>
                    
                        <section id="visit-stats">
                            <h3>Visit Stats</h3>
                            <p>Analyze website traffic statistics and view detailed analytics.</p>
                            <div class="row">
                                <div class="col-12">
                                    <a href="images/upload/version-2.0/visit-stats.png" data-rel="prettyPhoto">
                                        <img src="images/upload/version-2.0/visit-stats.png" alt="" class="img-responsive img-thumbnail">
                                    </a>
                                </div>
                            </div>
                        </section>

                        <section id="blocked-ips">
                            <h3>Blocked IPs</h3>
                            <p>Manage and restrict access from unwanted IP addresses. Features include:</p>

                            <div class="row">
                                <div class="col-12">
                                    <a href="images/upload/version-2.0/blocked-ips.png" data-rel="prettyPhoto">
                                        <img src="images/upload/version-2.0/blocked-ips.png" alt="" class="img-responsive img-thumbnail">
                                    </a>
                                </div>
                            </div>
                            <ul>
                                <li>Form for adding blocked IP addresses.</li>
                                <li>Manual or automated blocking.</li>
                                <li>Search and removal options.</li>
                            </ul>
                        </section>

                        <section id="whitelisted-ips">
                            <h3>Whitelisted IPs</h3>
                            <p>Allow specific IP addresses for privileged access. Features include:</p>

                            <div class="row">
                                <div class="col-12">
                                    <a href="images/upload/version-2.0/whitelisted-ips.png" data-rel="prettyPhoto">
                                        <img src="images/upload/version-2.0/whitelisted-ips.png" alt="" class="img-responsive img-thumbnail">
                                    </a>
                                </div>
                            </div>
                            <ul>
                                <li>Form for adding whitelisted IP addresses.</li>
                                <li>Search and removal options.</li>
                            </ul>
                        </section>
                    
                        <section id="backups">
                            <h3>Backups</h3>
                            <p>Create and manage backups for the database and website files.</p>
                            <div class="row">
                                <div class="col-12">
                                    <a href="images/upload/version-2.0/backups.png" data-rel="prettyPhoto">
                                        <img src="images/upload/version-2.0/backups.png" alt="" class="img-responsive img-thumbnail">
                                    </a>
                                </div>
                            </div>
                        </section>
                    
                        <section id="file-editor">
                            <h3>File Editor</h3>
                            <p>Edit theme files directly within the admin panel (use this feature with caution).</p>
                            <div class="row">
                                <div class="col-12">
                                    <a href="images/upload/version-2.0/file-editor.png" data-rel="prettyPhoto">
                                        <img src="images/upload/version-2.0/file-editor.png" alt="" class="img-responsive img-thumbnail">
                                    </a>
                                </div>
                            </div>
                        </section>
                    </section>

                    <section id="plugins">
                        <h2>Plugins</h2>
                        <section id="manage-plugin">
                            <h3>Installed Plugins</h3>
                            <p>Manage installed plugins.</p>
                            <div class="row">
                                <div class="col-12">
                                    <a href="images/upload/version-2.0/manage-plugins.png" data-rel="prettyPhoto">
                                        <img src="images/upload/version-2.0/manage-plugins.png" alt="" class="img-responsive img-thumbnail">
                                    </a>
                                </div>
                            </div>
                        </section>
                        <section id="plugin-configurations">
                            <h3>Plugin Configs</h3>
                            <p>Manage plugin's configuration data.</p>
                            <div class="row">
                                <div class="col-12">
                                    <a href="images/upload/version-2.0/plugin-configs.png" data-rel="prettyPhoto">
                                        <img src="images/upload/version-2.0/plugin-configs.png" alt="" class="img-responsive img-thumbnail">
                                    </a>
                                </div>
                            </div>
                        </section>
                    </section>

                    <!-- end section -->
                    <section id="ai-assistance">
                        <h2>AI Assistance</h2>
                        <p>Enhance productivity and streamline workflows with AI-powered features tailored for Igniter CMS.</p>

                        <section id="ask-ai">
                            <h3>Ask AI</h3>
                            <p>Get instant AI-powered assistance for any questions related to <a href="https://ignitercms.com">Igniter CMS</a>. Features include:</p>

                            <div class="row">
                                <div class="col-12">
                                    <a href="images/upload/version-2.0/ask-ai.png" data-rel="prettyPhoto">
                                        <img src="images/upload/version-2.0/ask-ai.png" alt="" class="img-responsive img-thumbnail">
                                    </a>
                                </div>
                            </div>
                            <ul>
                                <li>AI-powered responses for troubleshooting and best practices.</li>
                                <li>Instant answers for common CMS-related queries.</li>
                                <li>Guidance on module usage and integrations.</li>
                                <li>Recommendations for optimizing CMS performance.</li>
                                <li>Interactive search for documentation and support topics.</li>
                            </ul>
                        </section>

                        <section id="ai-text-generation">
                            <h3>AI Text Generation</h3>
                            <p>Generate content dynamically to improve site efficiency and SEO ranking. Features include:</p>

                            <div class="row">
                                <div class="col-12">
                                    <a href="images/upload/version-2.0/ai-text-generation.png" data-rel="prettyPhoto">
                                        <img src="images/upload/version-2.0/ai-text-generation.png" alt="" class="img-responsive img-thumbnail">
                                    </a>
                                </div>
                            </div>
                            <ul>
                                <li>Generate CMS titles based on best practices.</li>
                                <li>Automate description generation for pages and posts.</li>
                                <li>Create dynamic SEO metadata to improve search visibility.</li>
                                <li>Suggest relevant tags for categorization.</li>
                                <li>Enhance user engagement with AI-crafted summaries.</li>
                            </ul>
                        </section>

                        <section id="ai-analysis">
                            <h3>AI Analysis</h3>
                            <p>Leverage AI to gain insights into site performance and operational data. Features include:</p>

                            <div class="row">
                                <div class="col-12">
                                    <a href="images/upload/version-2.0/ai-analysis.png" data-rel="prettyPhoto">
                                        <img src="images/upload/version-2.0/ai-analysis.png" alt="" class="img-responsive img-thumbnail">
                                    </a>
                                </div>
                            </div>
                            <ul>
                                <li>Analyze site statistics for visitor trends.</li>
                                <li>Review and interpret error logs for debugging.</li>
                                <li>Track file logs for audit trails and security monitoring.</li>
                                <li>Evaluate activity logs to monitor user engagement.</li>
                                <li>Provide actionable insights for site optimization.</li>
                            </ul>
                        </section>
                    </section>

                    <section id="deployment-instructions">
                        <h2>Deployment Instructions</h2>
                        <p>This section outlines various methods to deploy your Igniter CMS application to a live server. Regardless of the deployment method chosen, you will always need to create and restore your database on the server.</p>

                        <h3>Prerequisites for all Deployment Methods:</h3>
                        <ul>
                            <li>Access to your hosting control panel (e.g., <code>cPanel</code>).</li>
                            <li>Your Igniter CMS project files.</li>
                        </ul>

                        <section id="ftp-deployment">
                            <h3>FTP Deployment</h3>
                            <p>Deploying via FTP involves manually transferring files and setting up your database.</p>
                            <div class="row">
                                <div class="col-12">
                                    <a href="images/upload/version-2.0/file-manager.png" data-rel="prettyPhoto">
                                        <img src="images/upload/version-2.0/file-manager.png" alt="" class="img-responsive img-thumbnail">
                                    </a>
                                </div>
                            </div>
                            <ol>
                                <li><strong>Database Setup:</strong>
                                    <ol type="a">
                                        <li>Log in to your hosting control panel (e.g., <code>cPanel</code>).</li>
                                        <li>Create a new database and a new database user.</li>
                                        <li>Grant the newly created user all necessary permissions on the database.</li>
                                        <li>Export your local Igniter CMS database from <code>phpMyAdmin</code> (or your preferred database management tool).</li>
                                        <li>Access <code>phpMyAdmin</code> in your hosting control panel and import the exported database file into the newly created database.</li>
                                    </ol>
                                </li>
                                <li><strong>FTP Connection:</strong>
                                    <ol type="a">
                                        <li>If you don't already have one, create an FTP user in your hosting control panel.</li>
                                        <li>Connect to your server using an FTP client (e.g., <code>FileZilla</code>) with your FTP credentials.</li>
                                        <li>Navigate to the desired directory on your server where your website files will reside (e.g., <code>public_html</code> or a subdirectory).</li>
                                    </ol>
                                </li>
                                <li><strong>File Transfer:</strong>
                                    <ol type="a">
                                        <li>Upload all Igniter CMS project files from your local machine to the chosen server directory.</li>
                                    </ol>
                                </li>
                                <li><strong>Configuration Updates:</strong>
                                    <ol type="a">
                                        <li>Open the <code>.env</code> file in your uploaded project root on the server and update the database connection details (database name, username, password).</li>
                                        <li>Open <code>app/Config/Database.php</code> on the server and ensure the database connection settings are correct.</li>
                                        <li>Open <code>app/Config/App.php</code> on the server and set the <code>baseURL</code> to your domain (e.g., <code>https://your-domain.com/</code>).</li>
                                    </ol>
                                </li>
                            </ol>
                        </section>

                        <section id="cicd-deployment">
                            <h3>CI/CD Pipeline (GitHub Actions)</h3>
                            <p>This method leverages a Continuous Integration/Continuous Deployment pipeline using GitHub Actions for automated deployment.</p>
                            <div class="row">
                                <div class="col-12">
                                    <a href="images/upload/version-2.0/github-actions.png" data-rel="prettyPhoto">
                                        <img src="images/upload/version-2.0/github-actions.png" alt="" class="img-responsive img-thumbnail">
                                    </a>
                                </div>
                            </div>
                            <ol>
                                <li><strong>Workflow File Preparation:</strong>
                                    <ol type="a">
                                        <li>Navigate to the <code>.github/workflows/</code> directory in your local Igniter CMS project.</li>
                                        <li>Rename <code>main.yaml.txt</code> to <code>main.yaml</code>.</li>
                                        <li>Open the <code>main.yaml</code> file.</li>
                                        <li>Uncomment the YAML configuration by removing the <code>#</code> symbol from the beginning of relevant lines.</li>
                                        <li>Update the <code>server</code> key with your FTP server address (e.g., <code>server: ftp.your-domain.com</code>).</li>
                                        <li>Update the <code>server-dir</code> key with the path to your website's directory on the server (e.g., <code>server-dir: /your-site-path</code>).</li>
                                    </ol>
                                </li>
                                <li><strong>GitHub Repository Setup:</strong>
                                    <ol type="a">
                                        <li>Create a new Git repository on GitHub.</li>
                                        <li>Add two repository secrets: <code>FTPUSERNAME</code> and <code>FTPPASSWORD</code>, using your FTP account details.</li>
                                    </ol>
                                </li>
                                <li><strong>Local Configuration Updates:</strong>
                                    <ol type="a">
                                        <li>Update your local <code>.env</code> file with the production database connection details.</li>
                                        <li>Update <code>app/Config/Database.php</code> with the production database connection settings.</li>
                                        <li>Set the <code>baseURL</code> in your local <code>app/Config/App.php</code> to your domain.</li>
                                    </ol>
                                </li>
                                <li><strong>Vendor Folder Handling:</strong>
                                    <ol type="a">
                                        <li>Zip your local <code>vendor</code> folder (e.g., <code>vendor.zip</code>).</li>
                                        <li>Manually upload <code>vendor.zip</code> to your server's deployment directory (e.g., using FTP or File Manager).</li>
                                        <li>Extract the <code>vendor.zip</code> file in the server's deployment directory. The <code>vendor</code> folder is typically not pushed to Git due to its size and dynamic nature.</li>
                                    </ol>
                                </li>
                                <li><strong>Server <code>.env</code> File:</strong>
                                    <ol type="a">
                                        <li>Create an <code>.env</code> file directly on your server in the root of your deployed application directory. This file will not be pushed by Git. Configure it with your production environment variables, especially database credentials.</li>
                                    </ol>
                                </li>
                                <li><strong>Push to GitHub:</strong>
                                    <ol type="a">
                                        <li>Commit all your local changes (including the renamed <code>main.yaml</code> and updated configurations).</li>
                                        <li>Push your committed changes to your GitHub repository. The CI/CD pipeline will automatically trigger and deploy your application.</li>
                                    </ol>
                                </li>
                                <li><strong>Database Setup:</strong> (Same as step 1.a-d in FTP Deployment)
                                    <ol type="a">
                                        <li>Log in to your hosting control panel (e.g., <code>cPanel</code>).</li>
                                        <li>Create a new database and a new database user.</li>
                                        <li>Grant the newly created user all necessary permissions on the database.</li>
                                        <li>Export your local Igniter CMS database from <code>phpMyAdmin</code> (or your preferred database management tool).</li>
                                        <li>Access <code>phpMyAdmin</code> in your hosting control panel and import the exported database file into the newly created database.</li>
                                    </ol>
                                </li>
                            </ol>
                        </section>

                        <section id="file-upload">
                            <h3>File Upload (cPanel File Manager)</h3>
                            <p>This method utilizes your hosting provider's file manager to upload your entire project as a compressed archive.</p>
                            <div class="row">
                                <div class="col-12">
                                    <a href="images/upload/version-2.0/cpanel-file-manager.png" data-rel="prettyPhoto">
                                        <img src="images/upload/version-2.0/cpanel-file-manager.png" alt="" class="img-responsive img-thumbnail">
                                    </a>
                                </div>
                            </div>
                            <ol>
                                <li><strong>Local Configuration Updates:</strong>
                                    <ol type="a">
                                        <li>Update your local <code>.env</code> file with the production database connection details.</li>
                                        <li>Update <code>app/Config/Database.php</code> with the production database connection settings.</li>
                                        <li>Set the <code>baseURL</code> in your local <code>app/Config/App.php</code> to your domain.</li>
                                    </ol>
                                </li>
                                <li><strong>Compress Project:</strong>
                                    <ol type="a">
                                        <li>Zip your entire Igniter CMS project folder on your local machine. Ensure the zip file contains all necessary files and folders.</li>
                                    </ol>
                                </li>
                                <li><strong>Database Setup:</strong> (Same as step 1.a-d in FTP Deployment)
                                    <ol type="a">
                                        <li>Log in to your hosting control panel (e.g., <code>cPanel</code>).</li>
                                        <li>Create a new database and a new database user.</li>
                                        <li>Grant the newly created user all necessary permissions on the database.</li>
                                        <li>Export your local Igniter CMS database from <code>phpMyAdmin</code> (or your preferred database management tool).</li>
                                        <li>Access <code>phpMyAdmin</code> in your hosting control panel and import the exported database file into the newly created database.</li>
                                    </ol>
                                </li>
                                <li><strong>Upload and Extract:</strong>
                                    <ol type="a">
                                        <li>Log in to your hosting control panel (e.g., <code>cPanel</code>).</li>
                                        <li>Open the "File Manager".</li>
                                        <li>Navigate to the directory where you want to deploy your website (e.g., <code>public_html</code> or a specific subdirectory).</li>
                                        <li>Click on the "Upload" button and select your zipped Igniter CMS project file.</li>
                                        <li>Once the upload is complete, select the uploaded zip file in the File Manager.</li>
                                        <li>Click on the "Extract" button and choose the target directory for extraction (usually the current directory).</li>
                                    </ol>
                                </li>
                            </ol>
                        </section>
                    </section>
                    
                    <section id="for-developers">
                        <h2>For Developers</h2>
                        <section id="endpoints">
                            <h3>Endpoints</h3>
                            <p>The app includes fetch-only APIs for retrieving CMS data.</p>

                            <ul>
                                <li><strong>Generic Model Data</strong></li>
                                <li><code>/api/{api-key}/get-model-data?model=navigations&take=10&skip=0</code>: Generic - Fetch navigations (10 items, skip 0).</li>
                                <li><code>/api/{api-key}/get-model-data?model=categories&where_clause={"status":1}</code>: Generic - Fetch filtered categories (e.g., status = 1).</li>
                                <li><code>/api/{api-key}/get-model-data?model=blogs&where_clause={"blog_id":"{blog-id}"}</code>: Generic - Fetch filtered blogs (e.g., blog_id = {blog-id}).</li>
                                <li><code>/api/{api-key}/get-model-data?model=blogs&where_clause={"blog_id":"{blog-id}","status":1}</code>: Generic - Fetch multiple filtered blogs (e.g., blog_id = {blog-id} and status = 1).</li>
                            </ul>

                            <ul>
                                <li><strong>Blogs</strong></li>
                                <li><code>/api/{api-key}/get-all-blogs</code>: Returns a complete list of all published blog posts.</li>
                                <li><code>/api/{api-key}/get-blog/{blog_id}</code>: Fetches a specific blog post with detailed content, metadata, and related information.</li>
                                <li><code>/api/{api-key}/get-blogs?take=10&skip=0</code>: Retrieves paginated blog posts with customizable limit and offset parameters.</li>
                            </ul>

                            <ul>
                                <li><strong>Categories</strong></li>
                                <li><code>/api/{api-key}/get-category/{category_id}</code>: Retrieves detailed information about a specific content category.</li>
                                <li><code>/api/{api-key}/get-categories</code>: Gets all available content categories.</li>
                                <li><code>/api/{api-key}/get-categories?take=10&skip=0</code>: Returns a filtered list of categories with pagination.</li>
                            </ul>
                            
                            <ul>
                                <li><strong>Codes</strong></li>
                                <li><code>/api/{api-key}/get-code/{code_id}</code>: Fetches a specific code snippet or block with its metadata.</li>
                                <li><code>/api/{api-key}/get-codes</code>: Retrieves all available code snippets and blocks.</li>
                                <li><code>/api/{api-key}/get-codes?take=10&skip=0</code>: Gets a paginated list of code blocks with filtering options.</li>
                            </ul>
                            
                            <ul>
                                <li><strong>Content Blocks</strong></li>
                                <li><code>/api/{api-key}/get-content-block/{content_id}</code>: Obtains a specific reusable content block.</li>
                                <li><code>/api/{api-key}/get-content-blocks</code>: Returns all available content blocks.</li>
                                <li><code>/api/{api-key}/get-content-blocks?take=10&skip=0</code>: Retrieves filtered content blocks with pagination.</li>
                            </ul>

                            <ul>
                                <li><strong>Data Groups</strong></li>
                                <li><code>/api/{api-key}/get-all-data-groups</code>: Returns a complete list of all data groups.</li>
                                <li><code>/api/{api-key}/get-data-group/{group_id}</code>: Fetches details for a specific data group, including metadata and associated entries.</li>
                                <li><code>/api/{api-key}/get-data-groups?take=10&skip=0</code>: Retrieves paginated data groups with filtering options.</li>
                            </ul>
                            
                            <ul>
                                <li><strong>Navigation</strong></li>
                                <li><code>/api/{api-key}/get-navigation/{navigation_id}</code>: Fetches a specific navigation menu structure and its items.</li>
                                <li><code>/api/{api-key}/get-navigations?take=10&skip=0</code>: Returns a paginated list of navigation menus with their structures.</li>
                            </ul>
                            
                            <ul>
                                <li><strong>Pages</strong></li>
                                <li><code>/api/{api-key}/get-all-pages</code>: Retrieves all published static pages in the system.</li>
                                <li><code>/api/{api-key}/get-page/{page_id}</code>: Obtains a specific static page with its full content and attributes.</li>
                                <li><code>/api/{api-key}/get-pages?take=10&skip=0</code>: Gets a paginated list of static pages with filtering options.</li>
                            </ul>
                            
                            <ul>
                                <li><strong>Search</strong></li>
                                <li><code>/api/{api-key}/search-results?key=the</code>: Performs a global search across all content types.</li>
                                <li><code>/api/{api-key}/model-search-results?type=blog&key=the</code>: Searches within a specific content type.</li>
                                <li><code>/api/{api-key}/filter-search-results?type=author&key=admin</code>: Performs a filtered search with specific criteria.</li>
                            </ul>
                            
                            <ul>
                                <li><strong>Themes</strong></li>
                                <li><code>/api/{api-key}/get-theme/{theme_id}</code>: Fetches information about a specific theme configuration.</li>
                                <li><code>/api/{api-key}/get-themes</code>: Gets all available themes.</li>
                                <li><code>/api/{api-key}/get-themes?take=10&skip=0</code>: Returns a paginated list of themes.</li>
                            </ul>

                        </section>
                        <section id="model-names">
                            <h3>Model Names</h3>
                            <table>
                                <thead>
                                    <tr>
                                        <th>Model Name</th>
                                        <th>Corresponding Model</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>blockedIPsModel</td>
                                        <td>App\Models\BlockedIPsModel</td>
                                    </tr>
                                    <tr>
                                        <td>blogs</td>
                                        <td>App\Models\BlogsModel</td>
                                    </tr>
                                    <tr>
                                        <td>categories</td>
                                        <td>App\Models\CategoriesModel</td>
                                    </tr>
                                    <tr>
                                        <td>codes</td>
                                        <td>App\Models\CodesModel</td>
                                    </tr>
                                    <tr>
                                        <td>contentBlocks</td>
                                        <td>App\Models\ContentBlocksModel</td>
                                    </tr>
                                    <tr>
                                        <td>dataGroupsModel</td>
                                        <td>App\Models\DataGroupsModel</td>
                                    </tr>
                                    <tr>
                                        <td>navigations</td>
                                        <td>App\Models\NavigationsModel</td>
                                    </tr>
                                    <tr>
                                        <td>pages</td>
                                        <td>App\Models\PagesModel</td>
                                    </tr>
                                    <tr>
                                        <td>themes</td>
                                        <td>App\Models\ThemesModel</td>
                                    </tr>
                                    <tr>
                                        <td>whitelistedIPsModel</td>
                                        <td>App\Models\WhitelistedIPsModel</td>
                                    </tr>
                                </tbody>
                            </table>
                        </section>
                        <section id="model-attributes">
                            <h3>Model Attributes</h3>
                            <table border="1" style="width: 100%; border-collapse: collapse; text-align: left;">
                                <thead>
                                    <tr>
                                        <th style="padding: 8px;">Model Name</th>
                                        <th style="padding: 8px;">Model Fields</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="padding: 8px;">BlogsModel</td>
                                        <td style="padding: 8px;">
                                            <code>
                                                blog_id(VARCHAR), title(VARCHAR), slug(VARCHAR), featured_image(VARCHAR), excerpt(VARCHAR), 
                                            content(TEXT), category(VARCHAR), tags(VARCHAR), is_featured(BOOLEAN), status(INT), meta_title(VARCHAR), 
                                            meta_description(TEXT), meta_keywords(TEXT), created_by(DATETIME), updated_by(DATETIME)
                                            </code>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 8px;">BlockedIPsModel</td>
                                        <td style="padding: 8px;">
                                            <code>
                                                blocked_ip_id(VARCHAR), ip_address(VARCHAR), country(VARCHAR), block_start_time(DATETIME),
                                                block_end_time(DATETIME), reason(VARCHAR), notes(VARCHAR), page_visited_url(VARCHAR)
                                            </code>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 8px;">CategoriesModel</td>
                                        <td style="padding: 8px;">
                                            <code>
                                                category_id(VARCHAR), title(VARCHAR), description(VARCHAR), group(VARCHAR), parent(VARCHAR), 
                                            link(VARCHAR), new_tab(BOOLEAN), order(INT), status(INT), created_by(DATETIME), updated_by(DATETIME)
                                            </code>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 8px;">CodesModel</td>
                                        <td style="padding: 8px;">
                                            <code>
                                                code_id(VARCHAR), code_for(VARCHAR), code(VARCHAR), deletable(VARCHAR), 
                                            created_by(DATETIME), updated_by(DATETIME)
                                            </code>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 8px;">ContentBlocksModel</td>
                                        <td style="padding: 8px;">
                                            <code>
                                                content_id(VARCHAR), identifier(VARCHAR), author(VARCHAR), title(VARCHAR), description(VARCHAR), 
                                            content(TEXT), icon(VARCHAR), group(VARCHAR), image(VARCHAR), link(VARCHAR), new_tab(BOOLEAN), 
                                            order(INT), custom_field(VARCHAR), created_by(DATETIME), updated_by(DATETIME)
                                            </code>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 8px;">DataGroupsModel</td>
                                        <td style="padding: 8px;">
                                            <code>
                                                data_group_id(VARCHAR), data_group_for(VARCHAR), data_group_list(VARCHAR),
                                                deletable(VARCHAR), created_by(VARCHAR), updated_by(VARCHAR)
                                            </code>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 8px;">ThemesModel</td>
                                        <td style="padding: 8px;">
                                            <code>
                                                theme_id(VARCHAR), name(VARCHAR), path(VARCHAR), primary_color(VARCHAR), secondary_color(VARCHAR), other_color(VARCHAR),
                                            image(VARCHAR), theme_url(VARCHAR), footer_copyright(VARCHAR), category(VARCHAR), sub_category(VARCHAR), selected(BOOLEAN),
                                            deletable(BOOLEAN), home_page(VARCHAR), created_by(DATETIME), updated_by(DATETIME)
                                            </code>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 8px;">WhitelistedIPsModel</td>
                                        <td style="padding: 8px;">
                                            <code>
                                                whitelisted_ip_id(VARCHAR), ip_address(VARCHAR), reason(VARCHAR)
                                            </code>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            
                              
                        </section>
                        <section id="app-messages">
                            <h3>App Messages</h3>
                            <p>Customize the messages in the app in <code>app/Config/CustomConfig.php</code>.</p>
                            <div class="row">
                                <pre class="brush: php; highlight: [2,4]">class CustomConfig extends BaseConfig
{
        #--------------------------------------------------------------------
        # MESSAGES
        #--------------------------------------------------------------------
        public $wrongCredentialsMsg = 'Sign In Failed. The provided username/email or password is incorrect.';
        public $loginSuccessMsg = 'Login successful.';
        public $logoutSuccessMsg = 'You have been successfully logged out.';
        public $pendingActivationMsg = 'Your account has not been activated yet or is no longer active. Please contact the administrator.';
        public $tooManyFailedLogins = 'Too many failed login attempts. Your IP has been blocked for 1 hour.';
        public $invalidAccessMsg = 'You do not have access to this area.';
        public $createSuccessMsg = 'Record created successfully.';
        public $editSuccessMsg = 'Record updated successfully.';
        public $deleteSuccessMsg = 'Record removed successfully.';
        public $missingRequiredInputsMsg = 'There are validation errors. Possible missing required inputs.';
        public $sentContactMsg = 'Message sent successfully.';
        public $failedContactMsg = 'Form submission failed.';
        public $notFoundMsg = 'Record not found.';
        public $alreadyExistMsg = '[Record] already exists in table.';
        public $errorMsg = 'Oops! Something went wrong. Please try again later.';
        public $resetLinkMsg = 'A password reset link has been sent to your email address. Please check your inbox and follow the instructions to reset your password. If you do not see the email in your inbox, please check your spam or junk folder.';
        public $invalidResetLinkMsg = 'Invalid or expired password reset link.';
        public $passwordResetRequiredMsg = 'For security reasons, you need to change your password before continuing. Your current password was either set by an administrator or is a default password.';
        public $passwordResetSuccessfulMsg = 'Your password has been reset successfully. You can now log in with your new password.';
        public $passwordResetFailedMsg = 'Unable to reset password. Please try again';
        public $nonExistingResetEmailMsg = 'We are sorry, but the email address you entered is not associated with any account. Please check the email address and try again.';
        public $exceptionMsg = 'There was an error processing your request. Please try again. If this error persists, please see or send an email to system administrator.';
        public $contactMessageSuccessful = 'Your message has been sent successfully.';
        public $contactMessageFailed = 'Oops! Something went wrong with your message submission. Please try again later.';
        public $bookingSuccessful = 'Your booking has been made successfully.';
        public $bookingFailed = 'Oops! Something went wrong with your booking submission. Please try again later.';
        public $subscriptionSuccessful = 'You have successfully subscribed!';
        public $subscriptionFailed = 'Sorry, something went wrong with your subscription. Please try again.';

        #--------------------------------------------------------------------
        # THEME CATEGORIES
        #--------------------------------------------------------------------
        public $themeCategories = [
            'Business' => 'Business & Corporate',
            'Ecommerce' => 'Ecommerce',
            'Portfolio' => 'Portfolio & Resume',
            'News' => 'Blog & News',
            'Events' => 'Event & Booking Websites',
            'Educational' => 'Educational & Membership Websites',
            'Restaurant' => 'Restaurant & Hospitality Websites',
            'Health' => 'Health & Wellness Websites',
            'Directory' => 'Directory & Listing Websites',
            'Entertainment' => 'Entertainment Websites',
            'General' => 'General',
        ];


        #--------------------------------------------------------------------
        # USER ROLES
        #--------------------------------------------------------------------
        public $userRoles = [
            'Admin' => 'Admin',
            'Manager' => 'Manager',
            'User' => 'User',
        ];
    }
                                    </pre>
                                </div>
                            </section>
                            <section id="activity-types-message">
                                <h3>Activity Types Message</h3>
                                <p>Customize the data for activity types in logs in <code>app/Constants/ActivityTypes.php</code>.</p>
                                <div class="row">
                                    <pre class="brush: php">class ActivityTypes 
{
    //AUTH LOGS
    const USER_REGISTRATION = 'user_registration';
    const FAILED_USER_REGISTRATION = 'failed_user_registration';
    const USER_LOGIN = 'user_login';
    const USER_LOGOUT = 'user_logout';
    const FAILED_USER_LOGIN = 'failed_user_login';

    //CONTACT LOGS
    const CONTACT_CREATION = 'contact_created';
    const FAILED_CONTACT_CREATION = 'failed_contact_creation';
    const CONTACT_UPDATE = 'contact_updated';
    const FAILED_CONTACT_UPDATE = 'failed_contact_update';
    const CONTACT_DELETION = 'contact_delete';

    //USER LOGS
    const USER_CREATION = 'user_created';
    const FAILED_USER_CREATION = 'failed_user_creation';
    const USER_UPDATE = 'user_updated';
    const FAILED_USER_UPDATE = 'failed_user_update';
    const USER_DELETION = 'user_delete';

    .........................................................

    /**
        * Gets the description for a given activity type.
        *
        * @param string $type The activity type.
        * @return string The description of the activity type, or "Unknown Activity" if not found.
        */
    public static function getDescription($type)
    {
        $descriptions = [
            //Auth
            self::USER_REGISTRATION => 'User Registration',
            self::FAILED_USER_REGISTRATION => 'User Registration Failed',
            self::USER_LOGIN => 'User Login',
            self::USER_LOGOUT => 'User Logout',
            self::FAILED_USER_LOGIN => 'Failed User Login',

            //Contact
            self::CONTACT_CREATION => 'Contact Creation',
            self::FAILED_CONTACT_CREATION => 'Contact Creation Failed',
            self::CONTACT_UPDATE => 'Contact Update',
            self::FAILED_CONTACT_UPDATE => 'Contact Update Failed',
            self::CONTACT_DELETION => 'Contact Deletion',

            //User
            self::USER_CREATION => 'User Creation',
            self::FAILED_USER_CREATION => 'User Creation Failed',
            self::USER_UPDATE => 'User Update',
            self::FAILED_USER_UPDATE => 'User Update Failed',
            self::USER_DELETION => 'User Deletion',

            .........................................................
        ];

        return $descriptions[$type] ?? 'Unknown Activity';
    }
}
                                </pre>
                            </div>
                        </section>

                        <section id="theme-files">
                            <h3>Theme Files</h3>
                            <p>Customize the files by going to <code>app/Views/front-end/themes/{theme-folder}</code>.</p>
                        </section>
                    </section>
                    <!-- end section -->

                    <section id="copyright-license" class="section">

                        <div class="row">
                            <div class="col-md-12 left-align">
                                <h2 class="dark-text">Copyright and License <hr></h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">                   
                                <p>Copyright (c) 2025 Abdoulie Kassama</p>
                                <p>This project is licensed under the MIT License - see the <a href="https://github.com/akassama/igniter-cms/blob/main/LICENSE" target="_blank">LICENSE</a> file for details.</p>
                            </div>
                        </div>
                    </section>
                    <br>
                    <!-- end section -->
                </div>
                <!-- // end .col -->

            </div>
            <!-- // end .row -->

        </div>
        <!-- // end container -->

    </div>
    <!-- end wrapper -->

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/retina.js"></script>
    <script src="js/jquery.fitvids.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>

    <!-- CUSTOM PLUGINS -->
    <script src="js/custom.js"></script>
    <script src="js/main.js"></script>

    <script src="js/syntax-highlighter/scripts/shCore.js"></script>
    <script src="js/syntax-highlighter/scripts/shBrushXml.js"></script>
    <script src="js/syntax-highlighter/scripts/shBrushCss.js"></script>
    <script src="js/syntax-highlighter/scripts/shBrushJScript.js"></script>
    <script src="js/syntax-highlighter/scripts/shBrushPhp.js"></script>
</body>

</html>
