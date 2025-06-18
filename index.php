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
                            <p class="lead">Comprehensive Documentation - Version 1.0</p>
                        </div>
                        <!-- end title -->
                    </div>
                    <!-- end 12 -->
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
                                    <li><a href="#homepage">Home Page</a></li>
                                    <li><a href="#contentblocks">Content Blocks</a></li>
                                    <li><a href="#events">Events</a></li>
                                    <li><a href="#gallery">Gallery</a></li>
                                    <li><a href="#portfolios">Portfolios</a></li>
                                    <li><a href="#services">Services</a></li>
                                    <li><a href="#partners">Partners</a></li>
                                    <li><a href="#counters">Counters</a></li>
                                    <li><a href="#socials">Socials</a></li>
                                    <li><a href="#pricings">Pricings</a></li>
                                    <li><a href="#teams">Teams</a></li>
                                    <li><a href="#testimonials">Testimonials</a></li>
                                    <li><a href="#faqs">FAQs</a></li>
                                    <li><a href="#appointments">Appointments</a></li>
                                    <li><a href="#donation-causes">Donations</a></li>
                                    <li><a href="#popups">Popups</a></li>
                                    <li><a href="#data-groups">Data Groups</a></li>
                                </ul>
                            </li>
                            <li><a href="#ecommerce">Ecommerce </a>
                                <ul class="nav">
                                    <li><a href="#products">Products</a></li>
                                    <li><a href="#product-categories">Products Categories</a></li>
                                </ul>
                            </li>
                            <li><a href="#resumes">Resumes </a>
                                <ul class="nav">
                                    <li><a href="#manage-resumes">Manage Resumes</a></li>
                                    <li><a href="#manage-experiences">Manage Experiences</a></li>
                                    <li><a href="#manage-education">Manage Education</a></li>
                                    <li><a href="#manage-skills">Manage Skills</a></li>
                                </ul>
                            </li>
                            <li><a href="#file-manager">File Manager</a></li>
                            <li><a href="#settings">Settings</a>
                                <ul class="nav">
                                    <li><a href="#update-details">Update Details</a></li>
                                    <li><a href="#change-password">Change Password</a></li>
                                </ul>
                            </li>
                            <li><a href="#admin">Admin Management</a>
                                <ul class="nav">
                                    <li><a href="#manage-users">Manage Users</a></li>
                                    <li><a href="#translations">Translations</a></li>
                                    <li><a href="#configurations">Configurations</a></li>
                                    <li><a href="#codes">Codes</a></li>
                                    <li><a href="#themes">Themes</a></li>
                                    <li><a href="#api-keys">API Keys</a></li>
                                    <li><a href="#activity-logs">Activity Logs</a></li>
                                    <li><a href="#logs">Logs</a></li>
                                    <li><a href="#visit-stats">Visit Stats</a></li>
                                    <li><a href="#blocked-ips">Blocked IP's</a></li>
                                    <li><a href="#whitelisted-ips">Whitelisted IP's</a></li>
                                    <li><a href="#backups">Backups</a></li>
                                    <li><a href="#file-editor">File Editor</a></li>
                                    <li><a href="#contact-messages">Contact Messages</a></li>
                                    <li><a href="#bookings">Bookings</a></li>
                                    <li><a href="#subscribers">Subscribers</a></li>
                                </ul>
                            </li>
                            <li><a href="#ai-assistance">AI Assistance<small>(pro)</small> </a>
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
                                                <li><strong>Item Version : </strong> v 1.0</li>
                                                <li><strong>Author  : </strong> <a href="https://github.com/akassama" target="_blank">A. Kassama</a></li>
                                                <li><strong>Support Email : </strong> <a href="#" >kassamadeveloper(at)gmail.com</a></li>
                                                <li><strong>License : </strong> <a href="https://mit-license.org/" target="_blank">MIT License</a></li>
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
                                <li>Clone or download the project from the repository (<a href="https://github.com/akassama/codeigniter-starter-app">GitHub</a>).</li>
                                <li>Navigate to the project folder and run <code>composer install</code> to install dependencies.</li>
                                <li>Set the database config in <code>app/Config/Database.php</code>. Also use the <code>.env</code> file to configure environment and database settings.</li>
                                <li>Set the base URL in <code>app/Config/App.php</code>.</li>
								<li>Make sure you create the database in your local server.</li>
                                <li>Generate App Key: <code>php spark generate:key</code>. This command will generate/update the application key (APP_KEY) in .env file.</li>
                                <li>Run database migrations with <code>php spark migrate</code>.</li>
                                <li>Open the base url in browser. E.g. <code>http://localhost:8080/igniter-cms/</code>.</li>
                            </ol>
                            <p>
                                Note: To reset database you can use these commands <code>php spark delete:tables</code> and <code>php spark migrate</code>
                            </p>
                        </section>
                        <section id="permissions">
                            <h3>Permissions</h3>
                            <p>Ensure <code>writable</code> and <code>public/uploads</code> directories are writable by the web server.</p>
                        </section>
                        <section id="environment-configuration">
                            <h3>App Configuration</h3>
                            <p>Update the base URL in <code>app/Config/App.php</code>:</p>
                            <pre><code>public string $baseURL = 'https://localhost/apps/starter-app/';</code></pre>
                        </section>
                    </section>
                    
                    <section id="dashboard">
                        <h2>Dashboard</h2>
                        <p>The dashboard is the landing page of the backend and includes the following features:</p>
                        <div class="row">
                            <div class="col-12">
                                <a href="images/upload/01-dashboard.png" data-rel="prettyPhoto">
                                    <img src="images/upload/01-dashboard.png" alt="" class="img-responsive img-thumbnail">
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
                                <a href="images/upload/02-cms.png" data-rel="prettyPhoto">
                                    <img src="images/upload/02-cms.png" alt="" class="img-responsive img-thumbnail">
                                </a>
                            </div>
                        </div>
                        <section id="blogs">
                            <h3>Blogs</h3>
                            <p>Create, update, and remove blogs. Features include:</p>
                            <div class="col-12">
                                <a href="images/upload/03-cms-blogs.png" data-rel="prettyPhoto">
                                    <img src="images/upload/03-cms-blogs.png" alt="" class="img-responsive img-thumbnail">
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
                                    <a href="images/upload/05-cms-categories.png" data-rel="prettyPhoto">
                                        <img src="images/upload/05-cms-categories.png" alt="" class="img-responsive img-thumbnail">
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
                                    <a href="images/upload/07-cms-navigations.png" data-rel="prettyPhoto">
                                        <img src="images/upload/07-cms-navigations.png" alt="" class="img-responsive img-thumbnail">
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
                                    <a href="images/upload/09-cms-pages.png" data-rel="prettyPhoto">
                                        <img src="images/upload/09-cms-pages.png" alt="" class="img-responsive img-thumbnail">
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
                        
                        <section id="homepage">
                            <h3>Home Page</h3>
                            <p>Manage the content displayed on the home page. Features include:</p>
                            
                            <div class="row">
                                <div class="col-12">
                                    <a href="images/upload/11-cms-home-page.png" data-rel="prettyPhoto">
                                        <img src="images/upload/11-cms-home-page.png" alt="" class="img-responsive img-thumbnail">
                                    </a>
                                </div>
                            </div>
                            <ul>
                                <li>Edit content for predefined sections such as HomeHero, Services, Testimonials, etc.</li>
                                <li>Set the order of sections on the home page.</li>
                                <li>Status toggles (e.g., Published or Draft).</li>
                                <li>Add custom sections as needed.</li>
                            </ul>
                        </section>
                        
                        <section id="content-blocks">
                            <h3>Content Blocks</h3>
                            <p>Create reusable content blocks for other parts of the website.</p>
                            
                            <div class="row">
                                <div class="col-12">
                                    <a href="images/upload/13-cms-content-block.png" data-rel="prettyPhoto">
                                        <img src="images/upload/13-cms-content-block.png" alt="" class="img-responsive img-thumbnail">
                                    </a>
                                </div>
                            </div>
                        </section>
                        
                        <section id="events">
                            <h3>Events</h3>
                            <p>Create, update, and remove events. Features include:</p>
                            
                            <div class="row">
                                <div class="col-12">
                                    <a href="images/upload/15-cms-events.png" data-rel="prettyPhoto">
                                        <img src="images/upload/15-cms-events.png" alt="" class="img-responsive img-thumbnail">
                                    </a>
                                </div>
                            </div>
                            <ul>
                                <li>Form for event details, including title and content.</li>
                                <li>Slug generation from the title.</li>
                                <li>Image selection via input icon (copy file path under the "Actions" tab).</li>
                                <li>SEO data customization.</li>
                                <li>Status toggles (e.g., Published or Draft).</li>
                            </ul>
                        </section>
                        
                        <section id="portfolios">
                            <h3>Portfolios</h3>
                            <p>Manage site portfolios. Features include:</p>
                            
                            <div class="row">
                                <div class="col-12">
                                    <a href="images/upload/17-cms-portfolios.png" data-rel="prettyPhoto">
                                        <img src="images/upload/17-cms-portfolios.png" alt="" class="img-responsive img-thumbnail">
                                    </a>
                                </div>
                            </div>
                            <ul>
                                <li>Form for portfolio details, including title and content.</li>
                                <li>Slug generation from the title.</li>
                                <li>Image selection and additional detail images.</li>
                                <li>SEO data customization.</li>
                                <li>Status toggles (e.g., Published or Draft).</li>
                            </ul>
                        </section>

                        <section id="gallery">
                            <h3>Gallery</h3>
                            <p>Manage site galleries with categorized images. Features include:</p>

                            <div class="row">
                                <div class="col-12">
                                    <a href="images/upload/cms-gallery.png" data-rel="prettyPhoto">
                                        <img src="images/upload/cms-gallery.png" alt="" class="img-responsive img-thumbnail">
                                    </a>
                                </div>
                            </div>
                            <ul>
                                <li>Form for gallery details, including title, group, image, and caption.</li>
                                <li>You can use these images for gallery display in the theme.</li>
                                <li>Status toggles (e.g., Published or Draft).</li>
                            </ul>
                        </section>
                        
                        <section id="services">
                            <h3>Services</h3>
                            <p>Manage site services. Features include:</p>
                            
                            <div class="row">
                                <div class="col-12">
                                    <a href="images/upload/19-cms-services.png" data-rel="prettyPhoto">
                                        <img src="images/upload/19-cms-services.png" alt="" class="img-responsive img-thumbnail">
                                    </a>
                                </div>
                            </div>
                            <ul>
                                <li>Create, update, and remove services.</li>
                                <li>Order services for display.</li>
                                <li>Add icons, images, and links.</li>
                            </ul>
                        </section>
                        
                        <section id="partners">
                            <h3>Partners</h3>
                            <p>Manage site partners. Features include:</p>
                            
                            <div class="row">
                                <div class="col-12">
                                    <a href="images/upload/21-cms-partners.png" data-rel="prettyPhoto">
                                        <img src="images/upload/21-cms-partners.png" alt="" class="img-responsive img-thumbnail">
                                    </a>
                                </div>
                            </div>
                            <ul>
                                <li>Create, update, and remove partners.</li>
                                <li>Add partner logos and links.</li>
                            </ul>
                        </section>
                        
                        <section id="counters">
                            <h3>Counters</h3>
                            <p>Manage counters displayed on the site. Features include:</p>
                            
                            <div class="row">
                                <div class="col-12">
                                    <a href="images/upload/23-cms-counters.png" data-rel="prettyPhoto">
                                        <img src="images/upload/23-cms-counters.png" alt="" class="img-responsive img-thumbnail">
                                    </a>
                                </div>
                            </div>
                            <ul>
                                <li>Create, update, and remove counters.</li>
                                <li>Set initial and final values.</li>
                                <li>Add links to counters.</li>
                            </ul>
                        </section>
                        
                        <section id="socials">
                            <h3>Socials</h3>
                            <p>Manage social media links. Features include:</p>
                            
                            <div class="row">
                                <div class="col-12">
                                    <a href="images/upload/25-cms-socials.png" data-rel="prettyPhoto">
                                        <img src="images/upload/25-cms-socials.png" alt="" class="img-responsive img-thumbnail">
                                    </a>
                                </div>
                            </div>
                            <ul>
                                <li>Create, update, and remove social links.</li>
                                <li>Set the display order.</li>
                            </ul>
                        </section>
                        
                        <section id="pricings">
                            <h3>Pricings</h3>
                            <p>Manage pricing plans. Features include:</p>
                            <div class="row">
                                <div class="col-12">
                                    <a href="images/upload/27-cms-pricings.png" data-rel="prettyPhoto">
                                        <img src="images/upload/27-cms-pricings.png" alt="" class="img-responsive img-thumbnail">
                                    </a>
                                </div>
                            </div>
                            <ul>
                                <li>Create, update, and remove pricing plans.</li>
                                <li>Add included and excluded features (comma-separated).</li>
                                <li>Set order and mark as "Popular."</li>
                            </ul>
                        </section>
                        
                        <section id="teams">
                            <h3>Teams</h3>
                            <p>Manage team information. Features include:</p>
                            <div class="row">
                                <div class="col-12">
                                    <a href="images/upload/29-cms-teams.png" data-rel="prettyPhoto">
                                        <img src="images/upload/29-cms-teams.png" alt="" class="img-responsive img-thumbnail">
                                    </a>
                                </div>
                            </div>
                            <ul>
                                <li>Create, update, and remove team members.</li>
                                <li>Add names, titles, images, summaries, and social links.</li>
                            </ul>
                        </section>
                        
                        <section id="testimonials">
                            <h3>Testimonials</h3>
                            <p>Manage testimonials. Features include:</p>
                            <div class="row">
                                <div class="col-12">
                                    <a href="images/upload/31-cms-testimonials.png" data-rel="prettyPhoto">
                                        <img src="images/upload/31-cms-testimonials.png" alt="" class="img-responsive img-thumbnail">
                                    </a>
                                </div>
                            </div>
                            <ul>
                                <li>Create, update, and remove testimonials.</li>
                                <li>Add names, titles, images, and organizational details.</li>
                            </ul>
                        </section>
                        
                        <section id="faqs">
                            <h3>FAQs</h3>
                            <p>Manage frequently asked questions. Features include:</p>
                            <div class="row">
                                <div class="col-12">
                                    <a href="images/upload/33-cms-faqs.png" data-rel="prettyPhoto">
                                        <img src="images/upload/33-cms-faqs.png" alt="" class="img-responsive img-thumbnail">
                                    </a>
                                </div>
                            </div>
                            <ul>
                                <li>Create, update, and remove FAQs.</li>
                                <li>Provide questions, answers, and display order.</li>
                            </ul>
                        </section>

                        <section id="appointments">
                            <h3>Appointments</h3>
                            <p>Manage customer appointments with scheduling and tracking options. Features include:</p>

                            <div class="row">
                                <div class="col-12">
                                    <a href="images/upload/cms-appointments.png" data-rel="prettyPhoto">
                                        <img src="images/upload/cms-appointments.png" alt="" class="img-responsive img-thumbnail">
                                    </a>
                                </div>
                            </div>
                            <ul>
                                <li>Calendar integration with calendly.</li>
                                <li>Appointment scheduling form with time slots with calendly.</li>
                                <li>Automated email confirmations.</li>
                                <li>Status updates (e.g., Confirmed, Pending, Completed).</li>
                            </ul>
                        </section>
                        
                        <section id="donation-causes">
                            <h3>Donations</h3>
                            <p>Manage donation causes. Features include:</p>
                            <div class="row">
                                <div class="col-12">
                                    <a href="images/upload/35-cms-donations.png" data-rel="prettyPhoto">
                                        <img src="images/upload/35-cms-donations.png" alt="" class="img-responsive img-thumbnail">
                                    </a>
                                </div>
                            </div>
                            <ul>
                                <li>Create, update, and remove donation causes.</li>
                                <li>Form for donation details, including title and content.</li>
                                <li>Slug generation from the title.</li>
                                <li>Image selection and embedded page code support.</li>
                                <li>Status toggles (e.g., Published or Draft).</li>
                            </ul>
                        </section>

                        <section id="data-groups">
                            <h3>Data Groups</h3>
                            <p>Organize and manage structured data entries for various purposes. Features include:</p>

                            <div class="row">
                                <div class="col-12">
                                    <a href="images/upload/cms-data-groups.png" data-rel="prettyPhoto">
                                        <img src="images/upload/cms-data-groups.png" alt="" class="img-responsive img-thumbnail">
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
                        
                        <section id="popups">
                            <h3>Popup Adverts</h3>
                            <p>Manage popup advertisements. Features include:</p>
                            <div class="row">
                                <div class="col-12">
                                    <a href="images/upload/37-cms-popups.png" data-rel="prettyPhoto">
                                        <img src="images/upload/37-cms-popups.png" alt="" class="img-responsive img-thumbnail">
                                    </a>
                                </div>
                            </div>
                            <ul>
                                <li>Set popup types, titles, and text.</li>
                                <li>Configure images, links, and sizes.</li>
                            </ul>
                        </section>
                    </section>

                    <section id="ecommerce">
                        <h2>Ecommerce</h2>
                        <p>This is the module for the simple ecommerce service.</p>
                        <div class="row">
                            <div class="col-12">
                                <a href="images/upload/41-ecommerce.png" data-rel="prettyPhoto">
                                    <img src="images/upload/41-ecommerce.png" alt="" class="img-responsive img-thumbnail">
                                </a>
                            </div>
                        </div>
                        <section id="products">
                            <h3>Products</h3>
                            <p>Create, update, and remove products within this section.</p>
                            <div class="row">
                                <div class="col-12">
                                    <a href="images/upload/42-ecommerce-products.png" data-rel="prettyPhoto">
                                        <img src="images/upload/42-ecommerce-products.png" alt="" class="img-responsive img-thumbnail">
                                    </a>
                                </div>
                            </div>
                        </section>
                        <section id="product-categories">
                            <h3>Product Categories</h3>
                            <p>Create, update, and remove product categories within this section.</p>
                            <div class="row">
                                <div class="col-12">
                                    <a href="images/upload/44-ecommerce-product-categories.png" data-rel="prettyPhoto">
                                        <img src="images/upload/44-ecommerce-product-categories.png" alt="" class="img-responsive img-thumbnail">
                                    </a>
                                </div>
                            </div>
                        </section>
                    </section>
                    

                    <section id="resumes">
                        <h2>Resumes</h2>
                        <p>This is the module for managing the resumes data</p>
                        <div class="row">
                            <div class="col-12">
                                <a href="images/upload/46-resumes.png" data-rel="prettyPhoto">
                                    <img src="images/upload/46-resumes.png" alt="" class="img-responsive img-thumbnail">
                                </a>
                            </div>
                        </div>
                        <section id="manage-resumes">
                            <h3>Resumes</h3>
                            <p>Add resumes with fields like Name, Title, Image, Website, and more.</p>
                            <div class="row">
                                <div class="col-12">
                                    <a href="images/upload/47-resumes-educations.png" data-rel="prettyPhoto">
                                        <img src="images/upload/47-resumes-educations.png" alt="" class="img-responsive img-thumbnail">
                                    </a>
                                </div>
                            </div>
                        </section>
                        <section id="manage-experiences">
                            <h3>Experiences</h3>
                            <p>Add professional experiences with role and description.</p>
                            <div class="row">
                                <div class="col-12">
                                    <a href="images/upload/47-resumes-experiences.png" data-rel="prettyPhoto">
                                        <img src="images/upload/47-resumes-experiences.png" alt="" class="img-responsive img-thumbnail">
                                    </a>
                                </div>
                            </div>
                        </section>
                        <section id="manage-education">
                            <h3>Education</h3>
                            <p>Add educational qualifications.</p>
                            <div class="row">
                                <div class="col-12">
                                    <a href="images/upload/47-resumes-manage.png" data-rel="prettyPhoto">
                                        <img src="images/upload/47-resumes-manage.png" alt="" class="img-responsive img-thumbnail">
                                    </a>
                                </div>
                            </div>
                        </section>
                        <section id="manage-skills">
                            <h3>Skills</h3>
                            <p>Add and categorize skills.</p>
                            <div class="row">
                                <div class="col-12">
                                    <a href="images/upload/47-resumes-skills.png" data-rel="prettyPhoto">
                                        <img src="images/upload/47-resumes-skills.png" alt="" class="img-responsive img-thumbnail">
                                    </a>
                                </div>
                            </div>
                        </section>
                    </section>

                    <section id="file-manager" class="section">
                        <div class="row">
                            <div class="col-md-12 left-align">
                                <h2 class="dark-text">File Manager <hr></h2>
                                <p>Upload, manage, and organize files (images, videos, audios, documents, etc.) for use within the application.</p>
                                <div class="row">
                                    <div class="col-12">
                                        <a href="images/upload/48-files.png" data-rel="prettyPhoto">
                                            <img src="images/upload/48-files.png" alt="" class="img-responsive img-thumbnail">
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

                    <section id="settings">
                        <h2>Settings</h2>
                        <p>This is the module for managing your account details and changing passwords</p>
                        <div class="row">
                            <div class="col-12">
                                <a href="images/upload/50-settings.png" data-rel="prettyPhoto">
                                    <img src="images/upload/50-settings.png" alt="" class="img-responsive img-thumbnail">
                                </a>
                            </div>
                        </div>
                        <section id="update-details">
                            <h3>Update Details</h3>
                            <p>Update your account information (name, bio, etc.).</p>
                            <div class="row">
                                <div class="col-12">
                                    <a href="images/upload/51-settings-account-details.png" data-rel="prettyPhoto">
                                        <img src="images/upload/51-settings-account-details.png" alt="" class="img-responsive img-thumbnail">
                                    </a>
                                </div>
                            </div>
                        </section>
                        <section id="change-password">
                            <h3>Change Password</h3>
                            <p>Change your account password.</p>
                            <div class="row">
                                <div class="col-12">
                                    <a href="images/upload/52-settings-change-password.png" data-rel="prettyPhoto">
                                        <img src="images/upload/52-settings-change-password.png" alt="" class="img-responsive img-thumbnail">
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
                                <a href="images/upload/53-admin.png" data-rel="prettyPhoto">
                                    <img src="images/upload/53-admin.png" alt="" class="img-responsive img-thumbnail">
                                </a>
                            </div>
                        </div>
                    
                        <section id="manage-users">
                            <h3>Manage Users</h3>
                            <p>Create, edit, and manage user accounts and their permissions.</p>
                            <div class="row">
                                <div class="col-12">
                                    <a href="images/upload/54-admin-users.png" data-rel="prettyPhoto">
                                        <img src="images/upload/54-admin-users.png" alt="" class="img-responsive img-thumbnail">
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
														<li>- Home Page</li>
														<li>- Content Blocks</li>
														<li>- Events</li>
														<li>- Portfolios</li>
                                                        <li>- Gallery</li>
														<li>- Services</li>
														<li>- Partners</li>
														<li>- Counters</li>
														<li>- Socials</li>
														<li>- Pricings</li>
														<li>- Teams</li>
														<li>- Testimonials</li>
														<li>- FAQs</li>
														<li>- DataGroups</li>
                                                        <li>- DataGroups</li>
														<li>- Popups</li>
													</ul>
												</td>
												<td><i class="ri-check-line text-success"></i></td>
												<td><i class="ri-check-line text-success"></i></td>
											</tr>
											<tr>
												<td>
													E-Commerce
													<ul class="list-unstyled ms-3 small">
														<li>- Products</li>
														<li>- Categories</li>
													</ul>
												</td>
												<td><i class="ri-check-line text-success"></i></td>
												<td><i class="ri-check-line text-success"></i></td>
											</tr>
											<tr>
												<td>
													Resumes
													<ul class="list-unstyled ms-3 small">
														<li>- Manage Resumes</li>
														<li>- Manage Experiences</li>
														<li>- Manage Education</li>
														<li>- Manage Skills</li>
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
														<li>- Translations</li>
														<li>- Configurations</li>
														<li>- Codes</li>
														<li>- Themes</li>
														<li>- API Keys</li>
														<li>- Activity Logs</li>
														<li>- Logs</li>
														<li>- Visit Stats</li>
														<li>- Blocked IP's</li>
														<li>- Whitelisted IP's</li>
														<li>- Backups</li>
														<li>- File Editor</li>
														<li>- Contact Messages</li>
                                                        <li>- Bookings</li>
														<li>- Subscribers</li>
													</ul>
												</td>
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
                    
                        <section id="translations">
                            <h3>Translations</h3>
                            <p>Manage and translate application text into different languages.</p>
                            <div class="row">
                                <div class="col-12">
                                    <a href="images/upload/56-admin-translations.png" data-rel="prettyPhoto">
                                        <img src="images/upload/56-admin-translations.png" alt="" class="img-responsive img-thumbnail">
                                    </a>
                                </div>
                            </div>
                        </section>
                    
                        <section id="configurations">
                            <h3>Configurations</h3>
                            <p>Adjust application settings and configurations to suit your needs.</p>
                            <div class="row">
                                <div class="col-12">
                                    <a href="images/upload/58-admin-configurations.png" data-rel="prettyPhoto">
                                        <img src="images/upload/58-admin-configurations.png" alt="" class="img-responsive img-thumbnail">
                                    </a>
                                </div>
                            </div>
                        </section>
                    
                        <section id="codes">
                            <h3>Codes</h3>
                            <p>Edit header and footer JavaScript as well as custom CSS.</p>
                            <div class="row">
                                <div class="col-12">
                                    <a href="images/upload/60-admin-codes.png" data-rel="prettyPhoto">
                                        <img src="images/upload/60-admin-codes.png" alt="" class="img-responsive img-thumbnail">
                                    </a>
                                </div>
                            </div>
                        </section>
                    
                        <section id="themes">
                            <h3>Themes</h3>
                            <p>Manage and switch between different website themes.</p>
                            <div class="row">
                                <div class="col-12">
                                    <a href="images/upload/62-admin-themes.png" data-rel="prettyPhoto">
                                        <img src="images/upload/62-admin-themes.png" alt="" class="img-responsive img-thumbnail">
                                    </a>
                                </div>
                            </div>
                        </section>
                    
                        <section id="api-keys">
                            <h3>API Keys</h3>
                            <p>Generate and manage API keys for accessing CMS data via the API.</p>
                            <div class="row">
                                <div class="col-12">
                                    <a href="images/upload/64-admin-apis.png" data-rel="prettyPhoto">
                                        <img src="images/upload/64-admin-apis.png" alt="" class="img-responsive img-thumbnail">
                                    </a>
                                </div>
                            </div>
                        </section>
                    
                        <section id="activity-logs">
                            <h3>Activity Logs</h3>
                            <p>View a history of user actions and system events for tracking changes.</p>
                            <div class="row">
                                <div class="col-12">
                                    <a href="images/upload/68-admin-activity-logs.png" data-rel="prettyPhoto">
                                        <img src="images/upload/68-admin-activity-logs.png" alt="" class="img-responsive img-thumbnail">
                                    </a>
                                </div>
                            </div>
                        </section>

                        <section id="logs">
                            <h3>Logs</h3>
                            <p>Track system events and actions with detailed logs. Features include:</p>

                            <div class="row">
                                <div class="col-12">
                                    <a href="images/upload/cms-logs.png" data-rel="prettyPhoto">
                                        <img src="images/upload/cms-logs.png" alt="" class="img-responsive img-thumbnail">
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
                                    <a href="images/upload/68-admin-visit-stats.png" data-rel="prettyPhoto">
                                        <img src="images/upload/68-admin-visit-stats.png" alt="" class="img-responsive img-thumbnail">
                                    </a>
                                </div>
                            </div>
                        </section>

                        <section id="blocked-ips">
                            <h3>Blocked IPs</h3>
                            <p>Manage and restrict access from unwanted IP addresses. Features include:</p>

                            <div class="row">
                                <div class="col-12">
                                    <a href="images/upload/cms-blocked-ips.png" data-rel="prettyPhoto">
                                        <img src="images/upload/cms-blocked-ips.png" alt="" class="img-responsive img-thumbnail">
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
                                    <a href="images/upload/cms-whitelisted-ips.png" data-rel="prettyPhoto">
                                        <img src="images/upload/cms-whitelisted-ips.png" alt="" class="img-responsive img-thumbnail">
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
                                    <a href="images/upload/69-admin-backups.png" data-rel="prettyPhoto">
                                        <img src="images/upload/69-admin-backups.png" alt="" class="img-responsive img-thumbnail">
                                    </a>
                                </div>
                            </div>
                        </section>
                    
                        <section id="file-editor">
                            <h3>File Editor</h3>
                            <p>Edit theme files directly within the admin panel (use this feature with caution).</p>
                            <div class="row">
                                <div class="col-12">
                                    <a href="images/upload/70-admin-theme-files.png" data-rel="prettyPhoto">
                                        <img src="images/upload/70-admin-theme-files.png" alt="" class="img-responsive img-thumbnail">
                                    </a>
                                </div>
                            </div>
                        </section>
                    
                        <section id="contact-messages">
                            <h3>Contact Messages</h3>
                            <p>View and manage messages received from the website's contact form.</p>
                            <div class="row">
                                <div class="col-12">
                                    <a href="images/upload/72-admin-contact-messages.png" data-rel="prettyPhoto">
                                        <img src="images/upload/72-admin-contact-messages.png" alt="" class="img-responsive img-thumbnail">
                                    </a>
                                </div>
                            </div>
                        </section>

                        <section id="bookings">
                            <h3>Bookings</h3>
                            <p>Manage reservations for various services. Features include:</p>

                            <div class="row">
                                <div class="col-12">
                                    <a href="images/upload/cms-bookings.png" data-rel="prettyPhoto">
                                        <img src="images/upload/cms-bookings.png" alt="" class="img-responsive img-thumbnail">
                                    </a>
                                </div>
                            </div>
                            <ul>
                                <li>Booking request form.</li>
                                <li>Status tracking (e.g., Pending, Confirmed, Canceled).</li>
                            </ul>
                        </section>
                    
                        <section id="subscribers">
                            <h3>Subscribers</h3>
                            <p>Manage email subscribers and send newsletters to keep your audience engaged.</p>
                            <div class="row">
                                <div class="col-12">
                                    <a href="images/upload/73-admin-subscribers.png" data-rel="prettyPhoto">
                                        <img src="images/upload/73-admin-subscribers.png" alt="" class="img-responsive img-thumbnail">
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
                                    <a href="images/upload/ask-ai.png" data-rel="prettyPhoto">
                                        <img src="images/upload/ask-ai.png" alt="" class="img-responsive img-thumbnail">
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
                                    <a href="images/upload/ai-text-generation.png" data-rel="prettyPhoto">
                                        <img src="images/upload/ai-text-generation.png" alt="" class="img-responsive img-thumbnail">
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
                                    <a href="images/upload/ai-analysis.png" data-rel="prettyPhoto">
                                        <img src="images/upload/ai-analysis.png" alt="" class="img-responsive img-thumbnail">
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
                                    <a href="images/upload/file-manager.png" data-rel="prettyPhoto">
                                        <img src="images/upload/file-manager.png" alt="" class="img-responsive img-thumbnail">
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
                                    <a href="images/upload/github-actions.png" data-rel="prettyPhoto">
                                        <img src="images/upload/github-actions.png" alt="" class="img-responsive img-thumbnail">
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
                                    <a href="images/upload/cpanel-file-manager.png" data-rel="prettyPhoto">
                                        <img src="images/upload/cpanel-file-manager.png" alt="" class="img-responsive img-thumbnail">
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
                                <li><strong>Home Page</strong></li>
                                <li><code>/api/{api-key}/get-home-page</code>: Retrieves the main homepage content and layout configuration.</li>
                            </ul>

                            <ul>
                                <li><strong>Generic Model Data</strong></li>
                                <li><code>/api/{api-key}/get-model-data?model=navigations&take=10&skip=0</code>: Generic - Fetch navigations (10 items, skip 0).</li>
                                <li><code>/api/{api-key}/get-model-data?model=categories&where_clause={"status":1}</code>: Generic - Fetch filtered categories (e.g., status = 1).</li>
                                <li><code>/api/{api-key}/get-model-data?model=blogs&where_clause={"blog_id":"{blog-id}"}</code>: Generic - Fetch filtered blogs (e.g., blog_id = {blog-id}).</li>
                                <li><code>/api/{api-key}/get-model-data?model=blogs&where_clause={"blog_id":"{blog-id}","status":1}</code>: Generic - Fetch multiple filtered blogs (e.g., blog_id = {blog-id} and status = 1).</li>
                            </ul>

                            <ul>
                                <li><strong>Appointments</strong></li>
                                <li><code>/api/{api-key}/get-all-appointments</code>: Returns a complete list of all scheduled appointments.</li>
                                <li><code>/api/{api-key}/get-appointment/{appointment_id}</code>: Fetches details for a specific appointment, including time, status, and user details.</li>
                                <li><code>/api/{api-key}/get-appointments?take=10&skip=0</code>: Retrieves paginated appointments with customizable limit and offset parameters.</li>
                            </ul>

                            <ul>
                                <li><strong>Blogs</strong></li>
                                <li><code>/api/{api-key}/get-all-blogs</code>: Returns a complete list of all published blog posts.</li>
                                <li><code>/api/{api-key}/get-blog/{blog_id}</code>: Fetches a specific blog post with detailed content, metadata, and related information.</li>
                                <li><code>/api/{api-key}/get-blogs?take=10&skip=0</code>: Retrieves paginated blog posts with customizable limit and offset parameters.</li>
                            </ul>

                            <ul>
                                <li><strong>Bookings</strong></li>
                                <li><code>/api/{api-key}/get-all-bookings</code>: Returns a complete list of all bookings.</li>
                                <li><code>/api/{api-key}/get-booking/{booking_id}</code>: Fetches details for a specific booking, including associated user and status.</li>
                                <li><code>/api/{api-key}/get-bookings?take=10&skip=0</code>: Retrieves paginated bookings with limit and offset options.</li>
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
                                <li><strong>Countries</strong></li>
                                <li><code>/api/{api-key}/get-country/{country_id}</code>: Fetches detailed information about a specific country.</li>
                                <li><code>/api/{api-key}/get-countries</code>: Gets all available country data.</li>
                                <li><code>/api/{api-key}/get-countries?take=10&skip=0</code>: Returns a paginated list of countries.</li>
                            </ul>
                            
                            <ul>
                                <li><strong>Counters</strong></li>
                                <li><code>/api/{api-key}/get-counter/{counter_id}</code>: Obtains specific counter or statistics information.</li>
                                <li><code>/api/{api-key}/get-counters</code>: Returns all available counters and statistics.</li>
                                <li><code>/api/{api-key}/get-counters?take=10&skip=0</code>: Retrieves filtered counters with pagination.</li>
                            </ul>

                            <ul>
                                <li><strong>Data Groups</strong></li>
                                <li><code>/api/{api-key}/get-all-data-groups</code>: Returns a complete list of all data groups.</li>
                                <li><code>/api/{api-key}/get-data-group/{group_id}</code>: Fetches details for a specific data group, including metadata and associated entries.</li>
                                <li><code>/api/{api-key}/get-data-groups?take=10&skip=0</code>: Retrieves paginated data groups with filtering options.</li>
                            </ul>

                            <ul>
                                <li><strong>Donation Causes</strong></li>
                                <li><code>/api/{api-key}/get-donation-cause/{donation_cause_id}</code>: Fetches detailed information about a specific donation cause.</li>
                                <li><code>/api/{api-key}/get-donation-causes</code>: Gets all active donation causes.</li>
                                <li><code>/api/{api-key}/get-donation-causes?take=10&skip=0</code>: Returns a filtered list of donation causes with pagination.</li>
                            </ul>
                            
                            <ul>
                                <li><strong>Events</strong></li>
                                <li><code>/api/{api-key}/get-event/{event_id}</code>: Fetches detailed information about a specific event.</li>
                                <li><code>/api/{api-key}/get-events</code>: Gets all published events.</li>
                                <li><code>/api/{api-key}/get-events?take=10&skip=0</code>: Retrieves a paginated list of events.</li>
                            </ul>
                            
                            <ul>
                                <li><strong>FAQs</strong></li>
                                <li><code>/api/{api-key}/get-faq/{faq_id}</code>: Retrieves a specific frequently asked question and its answer.</li>
                                <li><code>/api/{api-key}/get-faqs</code>: Gets all published FAQs.</li>
                                <li><code>/api/{api-key}/get-faqs?take=10&skip=0</code>: Returns a filtered list of FAQs with pagination.</li>
                            </ul>

                            <ul>
                                <li><strong>Gallery</strong></li>
                                <li><code>/api/{api-key}/get-all-gallery-images</code>: Returns a complete list of all gallery images.</li>
                                <li><code>/api/{api-key}/get-gallery-image/{image_id}</code>: Fetches details for a specific image, including metadata and category.</li>
                                <li><code>/api/{api-key}/get-gallery-images?take=10&skip=0</code>: Retrieves paginated gallery images with customizable limit and offset parameters.</li>
                            </ul>

                            <ul>
                                <li><strong>Languages</strong></li>
                                <li><code>/api/{api-key}/get-language/{language_id}</code>: Fetches information about a specific language.</li>
                                <li><code>/api/{api-key}/get-languages</code>: Retrieves all available languages.</li>
                                <li><code>/api/{api-key}/get-languages?take=10&skip=0</code>: Gets a paginated list of languages.</li>
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
                                <li><strong>Partners</strong></li>
                                <li><code>/api/{api-key}/get-partner/{partner_id}</code>: Fetches details about a specific partner or affiliate.</li>
                                <li><code>/api/{api-key}/get-partners</code>: Retrieves all partner information.</li>
                                <li><code>/api/{api-key}/get-partners?take=10&skip=0</code>: Gets a paginated list of partners.</li>
                            </ul>
                            
                            <ul>
                                <li><strong>Portfolio</strong></li>
                                <li><code>/api/{api-key}/get-portfolio/{portfolio_id}</code>: Fetches detailed information about a specific portfolio item.</li>
                                <li><code>/api/{api-key}/get-portfolios</code>: Gets all published portfolio items.</li>
                                <li><code>/api/{api-key}/get-portfolios?take=10&skip=0</code>: Returns a paginated list of portfolio items.</li>
                            </ul>

                            <ul>
                                <li><strong>Pricing</strong></li>
                                <li><code>/api/{api-key}/get-pricing/{pricing_id}</code>: Fetches details about a specific pricing plan.</li>
                                <li><code>/api/{api-key}/get-pricings</code>: Gets all available pricing plans.</li>
                                <li><code>/api/{api-key}/get-pricings?take=10&skip=0</code>: Returns a paginated list of pricing plans.</li>
                            </ul>
                            
                            <ul>
                                <li><strong>Product Categories</strong></li>
                                <li><code>/api/{api-key}/get-product-category/{product_category_id}</code>: Fetches a specific product category.</li>
                                <li><code>/api/{api-key}/get-product-categories</code>: Retrieves all product categories.</li>
                                <li><code>/api/{api-key}/get-product-categories?take=10&skip=0</code>: Returns a paginated list of product categories.</li>
                            </ul>
                            
                            <ul>
                                <li><strong>Products</strong></li>
                                <li><code>/api/{api-key}/get-product/{product_id}</code>: Obtains detailed information about a specific product.</li>
                                <li><code>/api/{api-key}/get-products</code>: Returns all available products.</li>
                                <li><code>/api/{api-key}/get-products?take=10&skip=0</code>: Gets a filtered list of products with pagination.</li>
                            </ul>
                            
                            <ul>
                                <li><strong>Resumes</strong></li>
                                <li><code>/api/{api-key}/get-resume/{resume_id}</code>: Fetches detailed information about a specific resume.</li>
                                <li><code>/api/{api-key}/get-resumes</code>: Gets all published resumes.</li>
                                <li><code>/api/{api-key}/get-resumes?take=10&skip=0</code>: Retrieves a filtered list of resumes with pagination.</li>
                            </ul>
                            
                            <ul>
                                <li><strong>Search</strong></li>
                                <li><code>/api/{api-key}/search-results?key=the</code>: Performs a global search across all content types.</li>
                                <li><code>/api/{api-key}/model-search-results?type=blog&key=the</code>: Searches within a specific content type.</li>
                                <li><code>/api/{api-key}/filter-search-results?type=author&key=admin</code>: Performs a filtered search with specific criteria.</li>
                            </ul>
                            
                            <ul>
                                <li><strong>Services</strong></li>
                                <li><code>/api/{api-key}/get-service/{service_id}</code>: Retrieves information about a specific service offering.</li>
                                <li><code>/api/{api-key}/get-services</code>: Gets all available services.</li>
                                <li><code>/api/{api-key}/get-services?take=10&skip=0</code>: Returns a filtered list of services with pagination.</li>
                            </ul>
                            
                            <ul>
                                <li><strong>Social Media</strong></li>
                                <li><code>/api/{api-key}/get-social/{social_id}</code>: Retrieves information about a specific social media link.</li>
                                <li><code>/api/{api-key}/get-socials</code>: Gets all social media links.</li>
                                <li><code>/api/{api-key}/get-socials?take=10&skip=0</code>: Returns a filtered list of social media links with pagination.</li>
                            </ul>
                            
                            <ul>
                                <li><strong>Team</strong></li>
                                <li><code>/api/{api-key}/get-team/{team_id}</code>: Fetches detailed information about a specific team member.</li>
                                <li><code>/api/{api-key}/get-teams</code>: Gets all team member profiles.</li>
                                <li><code>/api/{api-key}/get-teams?take=10&skip=0</code>: Retrieves a paginated list of team members.</li>
                            </ul>
                            
                            <ul>
                                <li><strong>Testimonials</strong></li>
                                <li><code>/api/{api-key}/get-testimonial/{testimonial_id}</code>: Obtains a specific customer testimonial.</li>
                                <li><code>/api/{api-key}/get-testimonials</code>: Returns all published testimonials.</li>
                                <li><code>/api/{api-key}/get-testimonials?take=10&skip=0</code>: Gets a filtered list of testimonials with pagination.</li>
                            </ul>
                            
                            <ul>
                                <li><strong>Themes</strong></li>
                                <li><code>/api/{api-key}/get-theme/{theme_id}</code>: Fetches information about a specific theme configuration.</li>
                                <li><code>/api/{api-key}/get-themes</code>: Gets all available themes.</li>
                                <li><code>/api/{api-key}/get-themes?take=10&skip=0</code>: Returns a paginated list of themes.</li>
                            </ul>
                            
                            <ul>
                                <li><strong>Translations</strong></li>
                                <li><code>/api/{api-key}/get-translation/{translation_id}</code>: Retrieves a specific translation entry.</li>
                                <li><code>/api/{api-key}/get-translations</code>: Gets all translation entries.</li>
                                <li><code>/api/{api-key}/get-translations?take=10&skip=0</code>: Returns filtered translation entries with pagination.</li>
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
                                        <td>announcementPopups</td>
                                        <td>App\Models\AnnouncementPopupsModel</td>
                                    </tr>
                                    <tr>
                                        <td>appointmentsModel</td>
                                        <td>App\Models\AppointmentsModel</td>
                                    </tr>
                                    <tr>
                                        <td>blockedIPsModel</td>
                                        <td>App\Models\BlockedIPsModel</td>
                                    </tr>
                                    <tr>
                                        <td>blogs</td>
                                        <td>App\Models\BlogsModel</td>
                                    </tr>
                                    <tr>
                                        <td>bookingsModel</td>
                                        <td>App\Models\BookingsModel</td>
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
                                        <td>countries</td>
                                        <td>App\Models\CountriesModel</td>
                                    </tr>
                                    <tr>
                                        <td>counters</td>
                                        <td>App\Models\CountersModel</td>
                                    </tr>
                                    <tr>
                                        <td>dataGroupsModel</td>
                                        <td>App\Models\DataGroupsModel</td>
                                    </tr>
                                    <tr>
                                        <td>donationCauses</td>
                                        <td>App\Models\DonationCausesModel</td>
                                    </tr>
                                    <tr>
                                        <td>events</td>
                                        <td>App\Models\EventsModel</td>
                                    </tr>
                                    <tr>
                                        <td>faqs</td>
                                        <td>App\Models\FrequentlyAskedQuestionsModel</td>
                                    </tr>
                                    <tr>
                                        <td>galleryModel</td>
                                        <td>App\Models\GalleryModel</td>
                                    </tr>
                                    <tr>
                                        <td>homePage</td>
                                        <td>App\Models\HomePageModel</td>
                                    </tr>
                                    <tr>
                                        <td>languages</td>
                                        <td>App\Models\LanguagesModel</td>
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
                                        <td>partners</td>
                                        <td>App\Models\PartnersModel</td>
                                    </tr>
                                    <tr>
                                        <td>policies</td>
                                        <td>App\Models\PoliciesModel</td>
                                    </tr>
                                    <tr>
                                        <td>portfolios</td>
                                        <td>App\Models\PortfoliosModel</td>
                                    </tr>
                                    <tr>
                                        <td>pricings</td>
                                        <td>App\Models\PricingsModel</td>
                                    </tr>
                                    <tr>
                                        <td>products</td>
                                        <td>App\Models\ProductsModel</td>
                                    </tr>
                                    <tr>
                                        <td>productCategories</td>
                                        <td>App\Models\ProductCategoriesModel</td>
                                    </tr>
                                    <tr>
                                        <td>resumes</td>
                                        <td>App\Models\ResumesModel</td>
                                    </tr>
                                    <tr>
                                        <td>services</td>
                                        <td>App\Models\ServicesModel</td>
                                    </tr>
                                    <tr>
                                        <td>socials</td>
                                        <td>App\Models\SocialsModel</td>
                                    </tr>
                                    <tr>
                                        <td>teams</td>
                                        <td>App\Models\TeamsModel</td>
                                    </tr>
                                    <tr>
                                        <td>testimonials</td>
                                        <td>App\Models\TestimonialsModel</td>
                                    </tr>
                                    <tr>
                                        <td>themes</td>
                                        <td>App\Models\ThemesModel</td>
                                    </tr>
                                    <tr>
                                        <td>translations</td>
                                        <td>App\Models\TranslationsModel</td>
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
                                        <td style="padding: 8px;">HomePageModel</td>
                                        <td style="padding: 8px;">
                                            <code>
                                                home_page_id(VARCHAR), section(VARCHAR), section_title(VARCHAR), section_description(VARCHAR), 
                                                section_image(VARCHAR), section_image_2(VARCHAR), section_image_3(VARCHAR), section_image_4(VARCHAR), 
                                                section_video(VARCHAR), section_audio(VARCHAR), section_file(VARCHAR), content_blocks(TEXT), 
                                                section_link(VARCHAR), new_tab(BOOLEAN), status(INT), order(INT), deletable(VARCHAR), 
                                                created_by(DATETIME), updated_by(DATETIME), created_at(DATETIME), updated_at(DATETIME)
                                            </code>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 8px;">AppointmentsModel</td>
                                        <td style="padding: 8px;">
                                            <code>
                                                appointment_id(VARCHAR), title(VARCHAR), description(VARCHAR), image(VARCHAR), slug(VARCHAR),
                                                appointment_type(VARCHAR), embed_url(VARCHAR), embed_script(TEXT), widget_height(VARCHAR),
                                                widget_min_width(VARCHAR), status(INT), total_views(INT), meta_title(VARCHAR),
                                                meta_description(VARCHAR), meta_keywords(VARCHAR), created_by(VARCHAR), updated_by(VARCHAR)
                                            </code>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 8px;">AnnouncementPopupsModel</td>
                                        <td style="padding: 8px;">
                                            <code>
                                                popup_id(VARCHAR), name(VARCHAR), type(VARCHAR), title(VARCHAR), text(TEXT), button_text(VARCHAR), 
                                            button_color(VARCHAR), cancel_button_text(VARCHAR), cancel_button_color(VARCHAR), link(VARCHAR), 
                                            new_tab(BOOLEAN), delay(VARCHAR), image(VARCHAR), preview_image(VARCHAR), background_color(VARCHAR), 
                                            text_color(VARCHAR), backdrop_opacity(VARCHAR), width(VARCHAR), height(VARCHAR), position(VARCHAR), 
                                            animation(VARCHAR), show_close_button(VARCHAR), enable_subscription(VARCHAR), 
                                            subscription_placeholder(VARCHAR), subscription_success_message(VARCHAR), enable_countdown(VARCHAR), 
                                            countdown_end_date(DATETIME), countdown_format(VARCHAR), countdown_expired_text(VARCHAR), 
                                            order(INT), status(INT), frequency(VARCHAR), show_on_pages(TEXT), deletable(VARCHAR), 
                                            created_by(DATETIME), updated_by(DATETIME), created_at(DATETIME), updated_at(DATETIME)
                                            </code>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 8px;">BookingsModel</td>
                                        <td style="padding: 8px;">
                                            <code>
                                                booking_id(VARCHAR), name(VARCHAR), email(VARCHAR), phone(VARCHAR), booking_date(DATE),
                                                booking_time(TIME), no_of_people(INT), message(VARCHAR), other(VARCHAR), ip_address(VARCHAR),
                                                country(VARCHAR), device(VARCHAR), created_by(VARCHAR), updated_by(VARCHAR)
                                            </code>
                                        </td>
                                    </tr>
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
                                        <td style="padding: 8px;">CountriesModel</td>
                                        <td style="padding: 8px;">
                                            <code>
                                                id(INT), iso(VARCHAR), name(VARCHAR), nicename(VARCHAR), iso3(VARCHAR), numcode(VARCHAR), phonecode(VARCHAR)
                                            </code>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 8px;">CountersModel</td>
                                        <td style="padding: 8px;">
                                            <code>
                                                counter_id(VARCHAR), title(VARCHAR), description(VARCHAR), icon(VARCHAR), initial_value(VARCHAR), 
                                            final_value(VARCHAR), extra_text(VARCHAR), link(VARCHAR), new_tab(BOOLEAN), 
                                            created_by(DATETIME), updated_by(DATETIME)
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
                                        <td style="padding: 8px;">DonationCausesModel</td>
                                        <td style="padding: 8px;">
                                            <code>
                                                donation_cause_id(VARCHAR), title(VARCHAR), description(VARCHAR), slug(VARCHAR), image(VARCHAR), content(TEXT), 
                                          link_title(VARCHAR), link(VARCHAR), new_tab(BOOLEAN), embedded_page_title(VARCHAR), embedded_page(VARCHAR), 
                                          status(INT), meta_title(VARCHAR), meta_description(TEXT), meta_keywords(TEXT)
                                            </code>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td style="padding: 8px;">EventsModel</td>
                                        <td style="padding: 8px;">
                                            <code>
                                                event_id(VARCHAR), title(VARCHAR), description(VARCHAR), slug(VARCHAR), image(VARCHAR), content(TEXT), 
                                          location(VARCHAR), start_date(VARCHAR), start_time(VARCHAR), end_date(VARCHAR), end_time(VARCHAR), 
                                          registration_link_label(VARCHAR), registration_link(VARCHAR), new_tab(BOOLEAN), status(INT), 
                                          meta_title(VARCHAR), meta_description(TEXT), meta_keywords(TEXT), created_by(DATETIME), updated_by(DATETIME)
                                            </code>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td style="padding: 8px;">FrequentlyAskedQuestionsModel</td>
                                        <td style="padding: 8px;">
                                            <code>
                                                faq_id(VARCHAR), question(VARCHAR), answer(VARCHAR), order(INT), created_by(DATETIME), updated_by(DATETIME)
                                            </code>
                                        </td>
                                      </tr>
                                      <tr>
                                          <td style="padding: 8px;">GalleryModel</td>
                                          <td style="padding: 8px;">
                                            <code>
                                                gallery_id(VARCHAR), title(VARCHAR), caption(VARCHAR), category_filter(VARCHAR),
                                                group(VARCHAR), image(VARCHAR), status(INT), created_by(VARCHAR), updated_by(VARCHAR)
                                            </code>
                                          </td>
                                      </tr>
                                      <tr>
                                        <td style="padding: 8px;">LanguagesModel</td>
                                        <td style="padding: 8px;">
                                            <code>
                                                language_id(VARCHAR), value(VARCHAR)
                                            </code>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td style="padding: 8px;">NavigationsModel</td>
                                        <td style="padding: 8px;">
                                            <code>
                                                navigation_id(VARCHAR), title(VARCHAR), description(VARCHAR), group(VARCHAR), order(INT), parent(VARCHAR), 
                                          link(VARCHAR), new_tab(BOOLEAN), created_by(DATETIME), updated_by(DATETIME)
                                            </code>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td style="padding: 8px;">PagesModel</td>
                                        <td style="padding: 8px;">
                                            <code>
                                                page_id(VARCHAR), title(VARCHAR), slug(VARCHAR), content(TEXT), status(INT), created_by(DATETIME), 
                                          updated_by(DATETIME), meta_title(VARCHAR), meta_keywords(TEXT), meta_description(TEXT), created_at(DATETIME), 
                                          updated_at(DATETIME)
                                            </code>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td style="padding: 8px;">PartnersModel</td>
                                        <td style="padding: 8px;">
                                            <code>
                                                partner_id(VARCHAR), title(VARCHAR), logo(VARCHAR), link(VARCHAR), new_tab(BOOLEAN), created_by(DATETIME), 
                                          updated_by(DATETIME)
                                            </code>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td style="padding: 8px;">PoliciesModel</td>
                                        <td style="padding: 8px;">
                                            <code>
                                                policy_id(VARCHAR), policy_for(VARCHAR), title(VARCHAR), content(TEXT), created_by(DATETIME), updated_by(DATETIME)
                                            </code>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td style="padding: 8px;">PortfoliosModel</td>
                                        <td style="padding: 8px;">
                                            <code>
                                                portfolio_id(VARCHAR), title(VARCHAR), description(VARCHAR), slug(VARCHAR), category(VARCHAR), 
                                          category_filter(VARCHAR), client(VARCHAR), project_date(VARCHAR), project_url(VARCHAR), featured_image(VARCHAR), 
                                          details_image_1(VARCHAR), details_image_2(VARCHAR), details_image_3(VARCHAR), details_image_4(VARCHAR), 
                                          content(TEXT), status(INT), created_by(DATETIME), updated_by(DATETIME), meta_title(VARCHAR), 
                                          meta_description(TEXT), meta_keywords(TEXT)
                                            </code>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td style="padding: 8px;">PricingsModel</td>
                                        <td style="padding: 8px;">
                                            <code>
                                                pricing_id(VARCHAR), title(VARCHAR), description(TEXT), currency(VARCHAR), amount(VARCHAR), period(VARCHAR),
                                            is_popular(BOOLEAN), included_features_list(TEXT), excluded_features_list(TEXT), link_title(VARCHAR), link(VARCHAR),
                                            new_tab(BOOLEAN), order(INT), other_label(VARCHAR), created_by(DATETIME), updated_by(DATETIME), created_at(DATETIME), updated_at(DATETIME)
                                            </code>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 8px;">ProductsModel</td>
                                        <td style="padding: 8px;">
                                            <code>
                                                product_id(VARCHAR), title(VARCHAR), description(TEXT), short_description(TEXT), slug(VARCHAR), category(VARCHAR),
                                            sub_category(VARCHAR), brand(VARCHAR), model(VARCHAR), price(VARCHAR), sale_price(VARCHAR), currency(VARCHAR),
                                            price_note(VARCHAR), featured_image(VARCHAR), product_image_1(VARCHAR), product_image_2(VARCHAR), product_image_3(VARCHAR),
                                            product_image_4(VARCHAR), product_video(VARCHAR), is_featured(BOOLEAN), specifications(TEXT), attributes(TEXT),
                                            seller_info(TEXT), purchase_options(TEXT), tags(TEXT), status(INT), order(INT), created_by(DATETIME), updated_by(DATETIME),
                                            meta_title(TEXT), meta_description(TEXT), meta_keywords(TEXT)
                                            </code>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 8px;">ProductCategoriesModel</td>
                                        <td style="padding: 8px;">
                                            <code>
                                                category_id(VARCHAR), title(VARCHAR), description(TEXT), group(VARCHAR), parent(VARCHAR), link(VARCHAR), new_tab(BOOLEAN),
                                            order(INT), status(INT), created_by(DATETIME), updated_by(DATETIME)
                                            </code>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 8px;">ResumesModel</td>
                                        <td style="padding: 8px;">
                                            <code>
                                                resume_id(VARCHAR), full_name(VARCHAR), title(VARCHAR), summary(TEXT), email(VARCHAR), phone(VARCHAR), address(VARCHAR),
                                            website(VARCHAR), linkedin_url(VARCHAR), github_url(VARCHAR), twitter_url(VARCHAR), image(VARCHAR), cv_file(VARCHAR),
                                            status(INT), created_by(DATETIME), updated_by(DATETIME), meta_title(TEXT), meta_description(TEXT), meta_keywords(TEXT)
                                            </code>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 8px;">ServicesModel</td>
                                        <td style="padding: 8px;">
                                            <code>
                                                service_id(VARCHAR), title(VARCHAR), description(TEXT), image(VARCHAR), icon(VARCHAR), link(VARCHAR), new_tab(BOOLEAN),
                                            order(INT), created_by(DATETIME), updated_by(DATETIME)
                                            </code>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 8px;">SocialsModel</td>
                                        <td style="padding: 8px;">
                                            <code>
                                                social_id(VARCHAR), name(VARCHAR), icon(VARCHAR), link(VARCHAR), new_tab(BOOLEAN), order(INT), created_by(DATETIME), updated_by(DATETIME)
                                            </code>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 8px;">TeamsModel</td>
                                        <td style="padding: 8px;">
                                            <code>
                                                team_id(VARCHAR), name(VARCHAR), title(VARCHAR), image(VARCHAR), summary(TEXT), social_link_1(VARCHAR), social_link_2(VARCHAR),
                                            social_link_3(VARCHAR), social_link_4(VARCHAR), social_link_5(VARCHAR), social_link_6(VARCHAR), details_link(VARCHAR),
                                            new_tab(BOOLEAN), created_by(DATETIME), updated_by(DATETIME)
                                            </code>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 8px;">TestimonialsModel</td>
                                        <td style="padding: 8px;">
                                            <code>
                                                testimonial_id(VARCHAR), name(VARCHAR), title(VARCHAR), company(VARCHAR), image(VARCHAR), testimonial(TEXT), rating(VARCHAR),
                                            link(VARCHAR), new_tab(BOOLEAN), created_by(DATETIME), updated_by(DATETIME)
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
                                        <td style="padding: 8px;">TranslationsModel</td>
                                        <td style="padding: 8px;">
                                            <code>
                                                translation_id(VARCHAR), language(VARCHAR), created_by(DATETIME)
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
