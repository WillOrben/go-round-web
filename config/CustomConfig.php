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


$_CONFIG['team:members'] = array(
    array(
        "name" => "Bear Matthews",
        "position" => "Chief Executive Officer / Founding Member",
        "biography" => "dsajfks;ajfk;lsajdfkl;ajfsdkl",
        "bitmoji" => "/img/team/bear-matthews.png"
    ),
    array(
        "name" => "Sebastian Rodriguez",
        "position" => "Chief Design Officer / Founding Member",
        "biography" => "dsajfks;ajfk;lsajdfkl;ajfsdkl",
        "bitmoji" => "/img/team/sebastian-rodriguez.png"
    ),
    array(
        "name" => "Daniel Barnes",
        "position" => "Chief Operating Officer / Founding Member",
        "biography" => "dsajfks;ajfk;lsajdfkl;ajfsdkl",
        "bitmoji" => "/img/team/daniel-barnes.png"
    ),
    array(
        "name" => "Christopher Elwell",
        "position" => "Chief Financial Officer",
        "biography" => "dsajfks;ajfk;lsajdfkl;ajfsdkl",
        "bitmoji" => "/img/team/chris-elwell.png"
    ),
    array(
        "name" => "Max Gregori",
        "position" => "Chief Marketing Officer",
        "biography" => "dsajfks;ajfk;lsajdfkl;ajfsdkl",
        "bitmoji" => "/img/team/max-gregori.png"
    ),
    array(
        "name" => "Paul Shin",
        "position" => "Marketing Designer",
        "biography" => "dsajfks;ajfk;lsajdfkl;ajfsdkl",
        "bitmoji" => "/img/team/paul-shin.png"
    ),
    array(
        "name" => "Alex Seibert",
        "position" => "Ad Management",
        "biography" => "dsajfks;ajfk;lsajdfkl;ajfsdkl",
        "bitmoji" => "/img/team/alex-seibert.png"
    ),
    array(
        "name" => "Spencer Dellenbaugh",
        "position" => "Web Development",
        "biography" => "dsajfks;ajfk;lsajdfkl;ajfsdkl",
        "bitmoji" => "/img/team/spencer-dellenbaugh.png"
    )
);

$_CONFIG['main:title'] = 'Go Round';

include('../libs/Handler.class.php');
global $handler;
$handler = new Handler;
