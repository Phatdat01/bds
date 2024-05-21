<?php require 'includes/header.php'; ?>

<table>
    <tr><td width="200px"><img src="<?php echo $property->image; ?>" width="100%" height="300ph"></td></tr>
    <tr><td style="padding: 5px; font-weight: bold;"><?php echo $property->title; ?></td></tr>
    <tr><td style="padding: 5px;">Author: <?php echo $property->author; ?></td></tr>
    <tr><td style="padding: 5px;">Area: <?php echo $property->area; ?> m&sup2</td></tr>
    <tr><td style="padding: 5px;">Price: <?php echo $this->formatPrice($property->price); ?></td></tr>
</table>

<?php require 'includes/footer.php'; ?>