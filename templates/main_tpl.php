<!DOCTYPE html>
<html>
<head>
    <title><?=$this->title()?> - <?=get('main:title');?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/87562780e6.js"></script>
    <link rel="stylesheet" type="text/css" href="/css/base.css"/>
    <?php $this->css(); ?>
</head>
<body>
<div id="splash">
    <table id="navbar">
        <tr>
            <td class="pull-left tab">
                <a href="#">The Design</a>
            </td>
            <td class="pull-left tab">
                <a href="#">Our Team</a>
            </td>
            <td class="pull-left tab">
                <a href="#">About Us</a>
            </td>
            <td class="pull-right icon">
                <i class="fa fa-instagram" aria-hidden="true"></i>
            </td>
            <td class="pull-right icon">
                <i class="fa fa-twitter" aria-hidden="true"></i>
            </td>
            <td class="pull-right icon">
                <i class="fa fa-facebook" aria-hidden="true"></i>
            </td>
        <tr>
    </table>
</div>
<div class="content">
    <div class="head">
        <?php $this->head(); ?>
    </div>
    <div class="body">
         <?php $this->page(); ?>
    </div>
    <div class="foot">
         <?php $this->foot(); ?>
    </div>
</div>
<div id="copyright">
    <p>Copyright &copy; 2016 - Go Round</p>
</div>
<footer>
    <?php $this->js(); ?>
</footer>
</body>
</html>
