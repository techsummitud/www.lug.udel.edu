<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include "header.php" ?>
        <title>LUG@UD - About</title>
    </head>
    <body>
        <div class="container">
            
            <div class="header header-image-5 img-rounded">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="intro-message">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <?php include 'navbar.php'; ?>
            <ol class="breadcrumb">
                <li><a href="/index.php">Home</a></li>
                <li class="active"><a href="/about.php">About</a></li>
            </ol>
            <div class="panel panel-default">
                <div class="panel-body">
                    <h1 class="text-center"><strong>About Us</strong></h1>
                    <div class="row row-padded-lg">
                        <div class="col-md-2">
                            <div class="text-center"><span class="glyphicon glyphicon-family" style="font-size:92pt;"></span></div>
                        </div>
                        <div class="col-md-10">
                            <h3><strong>Meetings</strong></h3>
                            <p>
			We hold meetings several times per month, to discuss club business, listen to a guest speaker, or simply have fun! We've featured guest speakers from many niches of the Computer Science industry and research space, with a current bent toward System Administration and Computer & Network Security. Feel free to <a href="/contact.php">contact us</a> if you are interested in speaking at an upcoming meeting!
														</p>
														<p>
			We love getting suggestions for meeting ideas from members, so if there's anything you'd like to learn or practice related to Linux or Computer Science, feel free to let us know!
														</p>
                            <p>
			Meetings have historically been held in 204 Evans Hall at the University of Delaware's Newark campus. Make sure to <a href="http://lists.lug.udel.edu/mailman/listinfo/lug-members" alt="Click here to subscribe!">subscribe to the UD LUG mailing list</a> if you want to know when and where our meetings will take place.
                            </p>
                        </div>
                        <div class="col-md-2">
                            <div class="text-center"><span class="glyphicon glyphicon-server" style="font-size:92pt;"></span></div>
                        </div>
                        <div class="col-md-10">
                            <h3><strong>Services</strong></h3>
                            <p>
			In addition to community support and development, the LUG provides several services to members and the general public.
														</p>
														<p>
															<h4>Member Services</h4>
															<ul>
																<li>SSH Shell Server with many language runtimes</li>
																<li>Raspberry Pi Cluster for parallel programming development</li>
																<li>Web Hosting</li>
																<li><span style="color:red;">Coming Soon!</span>Virtual Machine hosting</li>
																<li><span style="color:red;">Coming Soon!</span>Docker Container hosting</li>
															</ul>
														</p>
                            <p>
															<h4>Public Services</h4>
															<ul>
																<li><a href="http://mirror.lug.udel.edu/pub">Distribution Mirror</a></li>
																<li><a href="irc://irc.lug.udel.edu">IRC Server</a></li>
															</ul>
                            </p>
                        </div>
										</div>
               </div>
            </div>
        </div>
        <?php include 'footer.php'; ?>


        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="/assets/js/jquery.min.js"></script>
        <script src="/assets/js/bootstrap.min.js"></script>
    </body>
</html>
