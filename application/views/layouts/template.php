<!DOCTYPE html>
<html>
<head>
    <base href="<?=base_url()?>"></base>
    <link rel="shorcut icon" href="assets/imgs/ignite-logo-circle.png" />
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ignite Source</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Padauk|Quicksand&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="screen" href="semantic/semantic.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/jquery.datetimepicker.css"/>
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/jquery-confirm.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/style.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/custom.css" />
</head>
<body>
   
   <?php if($this->session->userdata('loginState')):?>
    <div class="ui fixed  menu <?=$this->session->userdata('site_lang')?>">
        
        <div class="ui container fluid">
            <a href="ignite/home" class="header item">
            <img src="assets/imgs/ignite-logo-circle.png" />
            &nbsp; &nbsp; IGNITE SOURCE &nbsp;
            <small class="text-grey">Inventory</small>
            </a>
            <a href="home" class="item <?php if($this->uri->segment(1) == 'home' || $this->uri->segment(1) == ''){echo 'active';}?>">
                <i class="desktop icon"></i> <?=$this->lang->line('home')?>
            </a>

            <a href="stocks-balance" class="item">
                <i class="table icon blue"></i> <?=$this->lang->line('stocks')?>
            </a>

            <a href="purchase/0" class="item">
                <i class="plus square icon green"></i> <?=$this->lang->line('purchase')?>
            </a>

            <a href="sales" class="item">
                <i class="minus square icon orange"></i> <?=$this->lang->line('sales')?>
            </a>

            

            <!-- <div class="ui simple dropdown item">
                <i class="file alternate outline icon"></i> REPORTS <i class="dropdown icon"></i>
            <div class="menu">
                <a class="item" href="report-daily"><i class="chart line icon teal"></i> Daily</a>
                <a class="item" href="report-monthly"><i class="chart line icon violet"></i> Monthly</a>
                <a class="item" href="report-yearly"><i class="chart line icon purple"></i> Yearly</a>
            </div>
            </div> -->

            <div class="right menu">
                <!-- Username -->
                <div class="borderless item">
                    <div class="ui dropdown">
                        <div class="default text"><i class="icon user circle"></i> <?=$this->session->userdata('username')?></div>
                        <i class="dropdown icon"></i>
                        <div class="menu">
                            <a href="ignite/logout" class="item" data-value="female"><i class="icon sign-out"></i> <?=$this->lang->line('logout')?></a>
                        </div>
                        </div>
                </div>

                <!-- Setting -->
                <div class="borderless item">
                    <div class="ui dropdown">
                        <div class="default icon"><i class="icon cog"></i></div>
                        
                            <div class="menu">
                                <a href="users" class="item" data-value="female">
                                    <i class="icon user circle"></i> <?=$this->lang->line('accounts')?>
                                </a>
                                <a href="warehouse" class="item" data-value="female">
                                    <i class="icon warehouse"></i> <?=$this->lang->line('warehouse')?>
                                </a>
                                <a href="supplier" class="item" data-value="female">
                                    <i class="icon cart plus"></i> <?=$this->lang->line('supplier')?>
                                </a>
                                <a href="currency" class="item" data-value="female">
                                    <i class="icon pound sign"></i> <?=$this->lang->line('currency')?>
                                </a>
                                <a href="categories" class="item" data-value="female">
                                    <i class="icon list ol"></i> <?=$this->lang->line('category')?>
                                </a>
                                <a href="brands" class="item" data-value="female">
                                    <i class="icon trademark"></i> <?=$this->lang->line('brand')?>
                                </a>
                                <a href="items-price/0" class="item">
                                    <i class="clipboard list icon"></i> <?=$this->lang->line('itemPrice')?>
                                </a>
                            </div>
                        </div>
                </div>


                <div class="item">
                    <div class="ui dropdown">
                        <div class="text">
                            <i class="language icon olive"></i>
                            <?=$this->session->userdata('site_lang')=='english'?'EN':'MM'?>
                        </div>
                        <div class="menu">
                            <a href="language/english" class="item" data-value="female"><i class="uk flag"></i> <?=$this->lang->line('lang_en')?></a>
                            <a href="language/myanmar" class="item" data-value="female"><i class="mm flag"></i> <?=$this->lang->line('lang_mm')?></a>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <div id="maincontent" class="ui main container fluid">
        <div class="content <?=$this->session->userdata('site_lang')?>">
            <?php $this->load->view($content)?>            
        </div>
    </div>

    <?php else:?>
        <?php $this->load->view('errors/error_401')?>
    <?php endif;?>

    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="semantic/semantic.min.js"></script>
    <script src="assets/js/jquery.datetimepicker.js"></script>
    <script src="assets/js/jquery-confirm.js"></script>
    <script src="assets/js/custom.js"></script>
</body>
</html>