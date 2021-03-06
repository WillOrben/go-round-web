<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
                <a href="/team">Our Team</a>
            </td>
            <td class="pull-left tab">
                <a href="#">About Us</a>
            </td>
            <?php if($template != "index"): ?>
            <td style="position: relative; padding-top: 10px;">
                <a href="/"><img src="/img/GR_logo_green_space.png" style="height: 60px;"/></a>
            </td>
            <?php endif; ?>
            <td class="pull-right icon">
                <i class="fa fa-instagram" aria-hidden="true" style="color: #936C0C;"></i>
            </td>
            <td class="pull-right icon">
                <i class="fa fa-twitter" aria-hidden="true" style="color: #0681B5;"></i>
            </td>
            <td class="pull-right icon">
                <i class="fa fa-facebook" aria-hidden="true" style="color: #2F559B;"></i>
            </td>
        <tr>
    </table>
    <?= $template != "index" ? "<hr style='margin-top: 0;'/>" : ""; ?>
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
    <p>Copyright &copy; 2017 - Go Round</p>
</div>
<footer>
    <script src="/js/jquery-3.1.1.min.js"></script>
    <?php $this->js(); ?>
</footer>
</body>
</html>
