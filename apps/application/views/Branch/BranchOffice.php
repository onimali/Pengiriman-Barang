<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?= ucwords($title); ?></title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?= base_url('public/template/'); ?>bootstrap/css/bootstrap.min.css">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <!-- Template style -->
    <link rel="stylesheet" href="<?= base_url('public/template/'); ?>dist/css/style.css">
    <link rel="stylesheet" href="<?= base_url('public/template/'); ?>pages/et-line-font/et-line-font.css">
    <link rel="stylesheet" href="<?= base_url('public/template/'); ?>pages/font-awesome/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="<?= base_url('public/template/'); ?>dist/weather/weather-icons.min.css">
    <link type="text/css" rel="stylesheet" href="<?= base_url('public/template/'); ?>dist/weather/weather-icons-wind.min.css">

</head>

<body class="body-bg-color">
    <div class="wrapper">
        <div class="form-body">
            <form class="col-form" action="<?= base_url('branch/1'); ?>" method="POST">
                <fieldset>
                    <section>
                        <select class="form-control" name="branch_office_select" style="height:100%;">
                            <option value="default"> --- PILIH CABANG --- </option>
                            <?php foreach ($branch as $b) : ?>
                                <option value="<?= $b->code_branch; ?>"><?= ucwords($b->desc_branch_office); ?></option>
                            <?php endforeach; ?>
                        </select>
                    </section>
                </fieldset>
                <footer class="text-right">
                    <button type="submit" class="btn btn-info pull-right">Submit</button>
            </form>
        </div>
    </div>
    <!-- wrapper -->

    <!-- jQuery -->
    <script src="<?= base_url('public/template/'); ?>dist/js/jquery.min.js"></script>
    <script src="<?= base_url('public/template/'); ?>bootstrap/js/bootstrap.min.js"></script>
    <script src="<?= base_url('public/template/'); ?>dist/js/ovio.js"></script>
</body>

</html>