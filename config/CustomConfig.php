<?php
global $_CONFIG;
$_CONFIG = array();

$_CONFIG['index:main-header'] = 'Go-Round';

$_CONFIG['index:splash:design'] = "GoRound's team has worked day and night for the past eight months to ensure our
application truly represents a product that can define the beauty of simplicity in design. It is the excitement our
team gets from hearing the diversity of definitions of beauty in design that has motivated the brilliant
development and design of this project.";

$_CONFIG['index:splash:algorithm'] = "What makes our algorithm, of which compromises the true core of GoRound's
application, so amazing is its ability to organically produce highly efficient and accurate results as to where any
specific user will like to go on any night out. The singular fact that we are able to do this in such a poised fashion
within our application while requiring absolutely no direct user input is revolutionizing.";

$_CONFIG['index:splash:team'] = "Our team represents the top 1% of living and consistently developing individuals
proving that the need to conform to the societal expectation of a college degree being a necessity for success and
happiness in life, is, and never should have been taken as a true fact. We are all under the age of 18. That is, we
all lack a high school diploma let alone any sort of degree earned in the institutions of higher education. Our ability
to swim against every current set before us, in its simplest form, defines to us the beauty of being.";

$_CONFIG['main:title'] = 'Go Round';

include('../libs/Handler.class.php');
global $handler;
$handler = new Handler;
