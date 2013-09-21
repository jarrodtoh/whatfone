<?php include('includes/header.php');?>
<section class="splash jumbotron">
    <h1>What<span>Fone</span></h1>
    <p>A Mobile Phone Sentiment Analyzer</p>
    <a><button class="btn btn-info btn-lg">Try now</button></a>
</section>

<section class="section-how">
    <div class="container" style="padding-top:2%;">
        <h1>How it works?</h1>
        <div>
            <div class="col-lg-4 text-center">
                <img src="<?php echo(IMG.'phone.png')?>" style="max-height: 200px" alt="image_how_1" class="img-thumbnail">
                <h4>Rank your feature preferences.</h4>
            </div>
            <div class="col-lg-4 text-center">
                <img src="<?php echo(IMG.'chat.png')?>" style="max-height: 200px" alt="image_how_2" class="img-thumbnail">
                <h4>We crawl the sentiments from the Internet based on your preferences.</h4>
            </div>
            <div class="col-lg-4 text-center">
                <img src="<?php echo(IMG.'graph.png')?>" style="max-height: 200px" alt="image_how_3" class="img-thumbnail">
                <h4>Results are then displayed to you.</h4>
            </div>
        </div>
    </div>
</section>
<?php include('includes/footer.php');?>