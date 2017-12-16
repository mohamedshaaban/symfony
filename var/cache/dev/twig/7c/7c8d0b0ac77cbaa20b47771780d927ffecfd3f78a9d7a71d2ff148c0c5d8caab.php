<?php

/* @SyliusShop/layout.html.twig */
class __TwigTemplate_992c2b6dd641115304aa569440fc8c59593fb6a91b31759d5218f0faa3bbf76b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'metatags' => array($this, 'block_metatags'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'top' => array($this, 'block_top'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ccae418b462121a4892b6af298226e0bedadc20b9c7e43ecd040a09263a9979a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccae418b462121a4892b6af298226e0bedadc20b9c7e43ecd040a09263a9979a->enter($__internal_ccae418b462121a4892b6af298226e0bedadc20b9c7e43ecd040a09263a9979a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/layout.html.twig"));

        $__internal_548ae7fca9d6d2f9bc5b96ee3e2c49853da13c00263048e4a53f574f97be27aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_548ae7fca9d6d2f9bc5b96ee3e2c49853da13c00263048e4a53f574f97be27aa->enter($__internal_548ae7fca9d6d2f9bc5b96ee3e2c49853da13c00263048e4a53f574f97be27aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>

<html lang=\"";
        // line 3
        echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 3, $this->getSourceContext()); })()), "request", array()), "locale", array()), 0, 2), "html", null, true);
        echo "\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

    <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">

    ";
        // line 12
        $this->displayBlock('metatags', $context, $blocks);
        // line 14
        echo "
    ";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        echo "
    ";
        // line 21
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.layout.head"));
        echo "
</head>

<body class=\"pushable\">
";
        // line 25
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.layout.before_body"));
        echo "
<div class=\"pusher\">
    ";
        // line 27
        $this->displayBlock('top', $context, $blocks);
        // line 41
        echo "
    <div class=\"ui container\">
        ";
        // line 43
        $this->displayBlock('header', $context, $blocks);
        // line 52
        echo "
        ";
        // line 53
        $this->loadTemplate("@SyliusUi/_flashes.html.twig", "@SyliusShop/layout.html.twig", 53)->display($context);
        // line 54
        echo "
        ";
        // line 55
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.layout.before_content"));
        echo "

        ";
        // line 57
        $this->displayBlock('content', $context, $blocks);
        // line 59
        echo "
        ";
        // line 60
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.layout.after_content"));
        echo "
    </div>

    ";
        // line 63
        $this->displayBlock('footer', $context, $blocks);
        // line 66
        echo "</div>

";
        // line 68
        $this->displayBlock('javascripts', $context, $blocks);
        // line 73
        echo "
";
        // line 74
        $this->loadTemplate("@SyliusUi/Modal/_confirmation.html.twig", "@SyliusShop/layout.html.twig", 74)->display($context);
        // line 75
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.layout.after_body"));
        echo "
</body>
</html>
";
        
        $__internal_ccae418b462121a4892b6af298226e0bedadc20b9c7e43ecd040a09263a9979a->leave($__internal_ccae418b462121a4892b6af298226e0bedadc20b9c7e43ecd040a09263a9979a_prof);

        
        $__internal_548ae7fca9d6d2f9bc5b96ee3e2c49853da13c00263048e4a53f574f97be27aa->leave($__internal_548ae7fca9d6d2f9bc5b96ee3e2c49853da13c00263048e4a53f574f97be27aa_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_4838f1ddd01aeefaf7531c40137ad0b38afaaedbdeb2da820dbdb2061c7eaba7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4838f1ddd01aeefaf7531c40137ad0b38afaaedbdeb2da820dbdb2061c7eaba7->enter($__internal_4838f1ddd01aeefaf7531c40137ad0b38afaaedbdeb2da820dbdb2061c7eaba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e78a30bd711459c1a80fe5cb9058ba5ef1d242255456bfb3b61d0f077db50528 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e78a30bd711459c1a80fe5cb9058ba5ef1d242255456bfb3b61d0f077db50528->enter($__internal_e78a30bd711459c1a80fe5cb9058ba5ef1d242255456bfb3b61d0f077db50528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Sylius";
        
        $__internal_e78a30bd711459c1a80fe5cb9058ba5ef1d242255456bfb3b61d0f077db50528->leave($__internal_e78a30bd711459c1a80fe5cb9058ba5ef1d242255456bfb3b61d0f077db50528_prof);

        
        $__internal_4838f1ddd01aeefaf7531c40137ad0b38afaaedbdeb2da820dbdb2061c7eaba7->leave($__internal_4838f1ddd01aeefaf7531c40137ad0b38afaaedbdeb2da820dbdb2061c7eaba7_prof);

    }

    // line 12
    public function block_metatags($context, array $blocks = array())
    {
        $__internal_2b83c7f907dc497a6dab35f5dd20f36d4b29279dd150538add3bcc5d5eee53ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b83c7f907dc497a6dab35f5dd20f36d4b29279dd150538add3bcc5d5eee53ce->enter($__internal_2b83c7f907dc497a6dab35f5dd20f36d4b29279dd150538add3bcc5d5eee53ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "metatags"));

        $__internal_c20566a3c6d21c35cebb759d31c24e3d53ee9e70938fe2fffa7d0e4d3ddf3378 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c20566a3c6d21c35cebb759d31c24e3d53ee9e70938fe2fffa7d0e4d3ddf3378->enter($__internal_c20566a3c6d21c35cebb759d31c24e3d53ee9e70938fe2fffa7d0e4d3ddf3378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "metatags"));

        // line 13
        echo "    ";
        
        $__internal_c20566a3c6d21c35cebb759d31c24e3d53ee9e70938fe2fffa7d0e4d3ddf3378->leave($__internal_c20566a3c6d21c35cebb759d31c24e3d53ee9e70938fe2fffa7d0e4d3ddf3378_prof);

        
        $__internal_2b83c7f907dc497a6dab35f5dd20f36d4b29279dd150538add3bcc5d5eee53ce->leave($__internal_2b83c7f907dc497a6dab35f5dd20f36d4b29279dd150538add3bcc5d5eee53ce_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_baf16e7f89953c6d3d3e7cdc47e3bc5964edd8880fc6a300230e210cde4cea04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_baf16e7f89953c6d3d3e7cdc47e3bc5964edd8880fc6a300230e210cde4cea04->enter($__internal_baf16e7f89953c6d3d3e7cdc47e3bc5964edd8880fc6a300230e210cde4cea04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_b025ddbddcb819b7bdd07164d07fa7e739a2a5f6a5e4c494e4292d9bd6414cc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b025ddbddcb819b7bdd07164d07fa7e739a2a5f6a5e4c494e4292d9bd6414cc3->enter($__internal_b025ddbddcb819b7bdd07164d07fa7e739a2a5f6a5e4c494e4292d9bd6414cc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 16
        echo "        ";
        $this->loadTemplate("@SyliusUi/_stylesheets.html.twig", "@SyliusShop/layout.html.twig", 16)->display(array_merge($context, array("path" => "assets/shop/css/style.css")));
        // line 17
        echo "
        ";
        // line 18
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.layout.stylesheets"));
        echo "
    ";
        
        $__internal_b025ddbddcb819b7bdd07164d07fa7e739a2a5f6a5e4c494e4292d9bd6414cc3->leave($__internal_b025ddbddcb819b7bdd07164d07fa7e739a2a5f6a5e4c494e4292d9bd6414cc3_prof);

        
        $__internal_baf16e7f89953c6d3d3e7cdc47e3bc5964edd8880fc6a300230e210cde4cea04->leave($__internal_baf16e7f89953c6d3d3e7cdc47e3bc5964edd8880fc6a300230e210cde4cea04_prof);

    }

    // line 27
    public function block_top($context, array $blocks = array())
    {
        $__internal_0971195406303d91e0b05dc3f9e67616b75116a2f80bd1305ed2a9fa07f82e39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0971195406303d91e0b05dc3f9e67616b75116a2f80bd1305ed2a9fa07f82e39->enter($__internal_0971195406303d91e0b05dc3f9e67616b75116a2f80bd1305ed2a9fa07f82e39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "top"));

        $__internal_8b588205cef75dea45d36445009454e19557f1bf2688f8dee8553c83f5613734 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b588205cef75dea45d36445009454e19557f1bf2688f8dee8553c83f5613734->enter($__internal_8b588205cef75dea45d36445009454e19557f1bf2688f8dee8553c83f5613734_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "top"));

        // line 28
        echo "        <div id=\"menu\" class=\"ui large sticky inverted stackable menu\">
            ";
        // line 29
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.layout.before_currency_switcher"));
        echo "

            ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("sylius.controller.shop.currency_switch:renderAction"));
        echo "
            ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("sylius.controller.shop.locale_switch:renderAction"));
        echo "

            ";
        // line 34
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.layout.before_security_widget"));
        echo "

            ";
        // line 36
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("sylius.controller.shop.security_widget:renderAction"));
        echo "

            ";
        // line 38
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.layout.after_security_widget"));
        echo "
        </div>
    ";
        
        $__internal_8b588205cef75dea45d36445009454e19557f1bf2688f8dee8553c83f5613734->leave($__internal_8b588205cef75dea45d36445009454e19557f1bf2688f8dee8553c83f5613734_prof);

        
        $__internal_0971195406303d91e0b05dc3f9e67616b75116a2f80bd1305ed2a9fa07f82e39->leave($__internal_0971195406303d91e0b05dc3f9e67616b75116a2f80bd1305ed2a9fa07f82e39_prof);

    }

    // line 43
    public function block_header($context, array $blocks = array())
    {
        $__internal_b0cf10731e29ebc0f55ea62c1c43a334eb067b62034e34d86f60742266104ff8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0cf10731e29ebc0f55ea62c1c43a334eb067b62034e34d86f60742266104ff8->enter($__internal_b0cf10731e29ebc0f55ea62c1c43a334eb067b62034e34d86f60742266104ff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_ea14bbfb8a060d03be3f708211dd863c228bdcc43d8b9a2cf3569348c936c602 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea14bbfb8a060d03be3f708211dd863c228bdcc43d8b9a2cf3569348c936c602->enter($__internal_ea14bbfb8a060d03be3f708211dd863c228bdcc43d8b9a2cf3569348c936c602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 44
        echo "            <header>
                ";
        // line 45
        $this->loadTemplate("@SyliusShop/_header.html.twig", "@SyliusShop/layout.html.twig", 45)->display($context);
        // line 46
        echo "
                ";
        // line 47
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.layout.after_header"));
        echo "

                ";
        // line 49
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("sylius_shop_partial_taxon_index_by_code", array("code" => "category", "template" => "@SyliusShop/Taxon/_horizontalMenu.html.twig")));
        echo "
            </header>
        ";
        
        $__internal_ea14bbfb8a060d03be3f708211dd863c228bdcc43d8b9a2cf3569348c936c602->leave($__internal_ea14bbfb8a060d03be3f708211dd863c228bdcc43d8b9a2cf3569348c936c602_prof);

        
        $__internal_b0cf10731e29ebc0f55ea62c1c43a334eb067b62034e34d86f60742266104ff8->leave($__internal_b0cf10731e29ebc0f55ea62c1c43a334eb067b62034e34d86f60742266104ff8_prof);

    }

    // line 57
    public function block_content($context, array $blocks = array())
    {
        $__internal_e0284499647785f58b7e83711db2d6515e96ef55f82e79781624d66dca38a842 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0284499647785f58b7e83711db2d6515e96ef55f82e79781624d66dca38a842->enter($__internal_e0284499647785f58b7e83711db2d6515e96ef55f82e79781624d66dca38a842_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_2cb6e700038e5246f3ce93ab76dcd2b7342b1c7aab310255cf20c24f0568c6c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cb6e700038e5246f3ce93ab76dcd2b7342b1c7aab310255cf20c24f0568c6c3->enter($__internal_2cb6e700038e5246f3ce93ab76dcd2b7342b1c7aab310255cf20c24f0568c6c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 58
        echo "        ";
        
        $__internal_2cb6e700038e5246f3ce93ab76dcd2b7342b1c7aab310255cf20c24f0568c6c3->leave($__internal_2cb6e700038e5246f3ce93ab76dcd2b7342b1c7aab310255cf20c24f0568c6c3_prof);

        
        $__internal_e0284499647785f58b7e83711db2d6515e96ef55f82e79781624d66dca38a842->leave($__internal_e0284499647785f58b7e83711db2d6515e96ef55f82e79781624d66dca38a842_prof);

    }

    // line 63
    public function block_footer($context, array $blocks = array())
    {
        $__internal_9735508a2acf36acde21bd58724af41c1ef12feb2a6135b586a90cd31ff58615 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9735508a2acf36acde21bd58724af41c1ef12feb2a6135b586a90cd31ff58615->enter($__internal_9735508a2acf36acde21bd58724af41c1ef12feb2a6135b586a90cd31ff58615_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_c522757429d2dbc2ee2b1d5371acbe094dad342ecbf64743f231abea76954d54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c522757429d2dbc2ee2b1d5371acbe094dad342ecbf64743f231abea76954d54->enter($__internal_c522757429d2dbc2ee2b1d5371acbe094dad342ecbf64743f231abea76954d54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 64
        echo "        ";
        $this->loadTemplate("@SyliusShop/_footer.html.twig", "@SyliusShop/layout.html.twig", 64)->display($context);
        // line 65
        echo "    ";
        
        $__internal_c522757429d2dbc2ee2b1d5371acbe094dad342ecbf64743f231abea76954d54->leave($__internal_c522757429d2dbc2ee2b1d5371acbe094dad342ecbf64743f231abea76954d54_prof);

        
        $__internal_9735508a2acf36acde21bd58724af41c1ef12feb2a6135b586a90cd31ff58615->leave($__internal_9735508a2acf36acde21bd58724af41c1ef12feb2a6135b586a90cd31ff58615_prof);

    }

    // line 68
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3b239ed7894f47b0cb1e9ff37ecd996140e0188068d3fa71c5b16e6e3563ec24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b239ed7894f47b0cb1e9ff37ecd996140e0188068d3fa71c5b16e6e3563ec24->enter($__internal_3b239ed7894f47b0cb1e9ff37ecd996140e0188068d3fa71c5b16e6e3563ec24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_7f699331687d0e1a3c6ed21843d1910dbd74a1a1f91ce1974c51f21e5c9ce374 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f699331687d0e1a3c6ed21843d1910dbd74a1a1f91ce1974c51f21e5c9ce374->enter($__internal_7f699331687d0e1a3c6ed21843d1910dbd74a1a1f91ce1974c51f21e5c9ce374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 69
        echo "    ";
        $this->loadTemplate("@SyliusUi/_javascripts.html.twig", "@SyliusShop/layout.html.twig", 69)->display(array_merge($context, array("path" => "assets/shop/js/app.js")));
        // line 70
        echo "
    ";
        // line 71
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.layout.javascripts"));
        echo "
";
        
        $__internal_7f699331687d0e1a3c6ed21843d1910dbd74a1a1f91ce1974c51f21e5c9ce374->leave($__internal_7f699331687d0e1a3c6ed21843d1910dbd74a1a1f91ce1974c51f21e5c9ce374_prof);

        
        $__internal_3b239ed7894f47b0cb1e9ff37ecd996140e0188068d3fa71c5b16e6e3563ec24->leave($__internal_3b239ed7894f47b0cb1e9ff37ecd996140e0188068d3fa71c5b16e6e3563ec24_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  337 => 71,  334 => 70,  331 => 69,  322 => 68,  312 => 65,  309 => 64,  300 => 63,  290 => 58,  281 => 57,  268 => 49,  263 => 47,  260 => 46,  258 => 45,  255 => 44,  246 => 43,  233 => 38,  228 => 36,  223 => 34,  218 => 32,  214 => 31,  209 => 29,  206 => 28,  197 => 27,  185 => 18,  182 => 17,  179 => 16,  170 => 15,  160 => 13,  151 => 12,  133 => 8,  119 => 75,  117 => 74,  114 => 73,  112 => 68,  108 => 66,  106 => 63,  100 => 60,  97 => 59,  95 => 57,  90 => 55,  87 => 54,  85 => 53,  82 => 52,  80 => 43,  76 => 41,  74 => 27,  69 => 25,  62 => 21,  59 => 20,  57 => 15,  54 => 14,  52 => 12,  45 => 8,  37 => 3,  33 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>

<html lang=\"{{ app.request.locale|slice(0, 2) }}\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

    <title>{% block title %}Sylius{% endblock %}</title>

    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">

    {% block metatags %}
    {% endblock %}

    {% block stylesheets %}
        {% include '@SyliusUi/_stylesheets.html.twig' with {'path': 'assets/shop/css/style.css'} %}

        {{ sonata_block_render_event('sylius.shop.layout.stylesheets') }}
    {% endblock %}

    {{ sonata_block_render_event('sylius.shop.layout.head') }}
</head>

<body class=\"pushable\">
{{ sonata_block_render_event('sylius.shop.layout.before_body') }}
<div class=\"pusher\">
    {% block top %}
        <div id=\"menu\" class=\"ui large sticky inverted stackable menu\">
            {{ sonata_block_render_event('sylius.shop.layout.before_currency_switcher') }}

            {{ render(controller('sylius.controller.shop.currency_switch:renderAction')) }}
            {{ render(controller('sylius.controller.shop.locale_switch:renderAction')) }}

            {{ sonata_block_render_event('sylius.shop.layout.before_security_widget') }}

            {{ render(controller('sylius.controller.shop.security_widget:renderAction')) }}

            {{ sonata_block_render_event('sylius.shop.layout.after_security_widget') }}
        </div>
    {% endblock %}

    <div class=\"ui container\">
        {% block header %}
            <header>
                {% include '@SyliusShop/_header.html.twig' %}

                {{ sonata_block_render_event('sylius.shop.layout.after_header') }}

                {{ render(url('sylius_shop_partial_taxon_index_by_code', {'code': 'category', 'template': '@SyliusShop/Taxon/_horizontalMenu.html.twig'})) }}
            </header>
        {% endblock %}

        {% include '@SyliusUi/_flashes.html.twig' %}

        {{ sonata_block_render_event('sylius.shop.layout.before_content') }}

        {% block content %}
        {% endblock %}

        {{ sonata_block_render_event('sylius.shop.layout.after_content') }}
    </div>

    {% block footer %}
        {% include '@SyliusShop/_footer.html.twig' %}
    {% endblock %}
</div>

{% block javascripts %}
    {% include '@SyliusUi/_javascripts.html.twig' with {'path': 'assets/shop/js/app.js'} %}

    {{ sonata_block_render_event('sylius.shop.layout.javascripts') }}
{% endblock %}

{% include '@SyliusUi/Modal/_confirmation.html.twig' %}
{{ sonata_block_render_event('sylius.shop.layout.after_body') }}
</body>
</html>
", "@SyliusShop/layout.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle\\Resources\\views\\layout.html.twig");
    }
}
