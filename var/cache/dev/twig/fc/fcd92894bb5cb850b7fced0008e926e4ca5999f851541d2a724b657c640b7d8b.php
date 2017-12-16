<?php

/* @SyliusShop/layout.html.twig */
class __TwigTemplate_e7e146679cea7a7e1a622df698dbfcd2911e064d7719f7602204ce1287555b84 extends Twig_Template
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
        $__internal_ff8f16dee1ec62bfa371293dd53ed963b9f1850ac38c0d5a64042b7915deaf29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff8f16dee1ec62bfa371293dd53ed963b9f1850ac38c0d5a64042b7915deaf29->enter($__internal_ff8f16dee1ec62bfa371293dd53ed963b9f1850ac38c0d5a64042b7915deaf29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/layout.html.twig"));

        $__internal_20b15cafd1327a07e911a2ff427e9cb2d78b8d2271ccf62fd05260fb1004331a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20b15cafd1327a07e911a2ff427e9cb2d78b8d2271ccf62fd05260fb1004331a->enter($__internal_20b15cafd1327a07e911a2ff427e9cb2d78b8d2271ccf62fd05260fb1004331a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/layout.html.twig"));

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
        
        $__internal_ff8f16dee1ec62bfa371293dd53ed963b9f1850ac38c0d5a64042b7915deaf29->leave($__internal_ff8f16dee1ec62bfa371293dd53ed963b9f1850ac38c0d5a64042b7915deaf29_prof);

        
        $__internal_20b15cafd1327a07e911a2ff427e9cb2d78b8d2271ccf62fd05260fb1004331a->leave($__internal_20b15cafd1327a07e911a2ff427e9cb2d78b8d2271ccf62fd05260fb1004331a_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_a6eb41497542fa7dfbebbc0314633d828ae08c72acd18a844728abe8fa7236a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6eb41497542fa7dfbebbc0314633d828ae08c72acd18a844728abe8fa7236a9->enter($__internal_a6eb41497542fa7dfbebbc0314633d828ae08c72acd18a844728abe8fa7236a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ec797c6c955057cf78c975aa6645393488114fe032933b21af99f0ca8ff5e740 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec797c6c955057cf78c975aa6645393488114fe032933b21af99f0ca8ff5e740->enter($__internal_ec797c6c955057cf78c975aa6645393488114fe032933b21af99f0ca8ff5e740_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Sylius";
        
        $__internal_ec797c6c955057cf78c975aa6645393488114fe032933b21af99f0ca8ff5e740->leave($__internal_ec797c6c955057cf78c975aa6645393488114fe032933b21af99f0ca8ff5e740_prof);

        
        $__internal_a6eb41497542fa7dfbebbc0314633d828ae08c72acd18a844728abe8fa7236a9->leave($__internal_a6eb41497542fa7dfbebbc0314633d828ae08c72acd18a844728abe8fa7236a9_prof);

    }

    // line 12
    public function block_metatags($context, array $blocks = array())
    {
        $__internal_6eb8db239909443345ae80f70d9d6a68cb92e938b28b34fa7e037a5b1aa0476f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6eb8db239909443345ae80f70d9d6a68cb92e938b28b34fa7e037a5b1aa0476f->enter($__internal_6eb8db239909443345ae80f70d9d6a68cb92e938b28b34fa7e037a5b1aa0476f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "metatags"));

        $__internal_933cf08f616f3ac75d3f0868a729fffa4b65bab046f13af81bcc851239c6cfd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_933cf08f616f3ac75d3f0868a729fffa4b65bab046f13af81bcc851239c6cfd2->enter($__internal_933cf08f616f3ac75d3f0868a729fffa4b65bab046f13af81bcc851239c6cfd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "metatags"));

        // line 13
        echo "    ";
        
        $__internal_933cf08f616f3ac75d3f0868a729fffa4b65bab046f13af81bcc851239c6cfd2->leave($__internal_933cf08f616f3ac75d3f0868a729fffa4b65bab046f13af81bcc851239c6cfd2_prof);

        
        $__internal_6eb8db239909443345ae80f70d9d6a68cb92e938b28b34fa7e037a5b1aa0476f->leave($__internal_6eb8db239909443345ae80f70d9d6a68cb92e938b28b34fa7e037a5b1aa0476f_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_baea5636b0eaa064d41d531326fa0e935969c61fa3fa078fc2fa224547cd1ab7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_baea5636b0eaa064d41d531326fa0e935969c61fa3fa078fc2fa224547cd1ab7->enter($__internal_baea5636b0eaa064d41d531326fa0e935969c61fa3fa078fc2fa224547cd1ab7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_1fc1f050058791e6caf9361deff359e27cd846a6a281707c64dc88cb87a05077 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fc1f050058791e6caf9361deff359e27cd846a6a281707c64dc88cb87a05077->enter($__internal_1fc1f050058791e6caf9361deff359e27cd846a6a281707c64dc88cb87a05077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_1fc1f050058791e6caf9361deff359e27cd846a6a281707c64dc88cb87a05077->leave($__internal_1fc1f050058791e6caf9361deff359e27cd846a6a281707c64dc88cb87a05077_prof);

        
        $__internal_baea5636b0eaa064d41d531326fa0e935969c61fa3fa078fc2fa224547cd1ab7->leave($__internal_baea5636b0eaa064d41d531326fa0e935969c61fa3fa078fc2fa224547cd1ab7_prof);

    }

    // line 27
    public function block_top($context, array $blocks = array())
    {
        $__internal_87f3613212e66d1ce9bf54323dd9dc0d2deed697b3b89f5318e3f193f26dffa2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87f3613212e66d1ce9bf54323dd9dc0d2deed697b3b89f5318e3f193f26dffa2->enter($__internal_87f3613212e66d1ce9bf54323dd9dc0d2deed697b3b89f5318e3f193f26dffa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "top"));

        $__internal_f28829def01f94582b619650a2b3d4e138b05b06ae3566beb0a314a98c860130 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f28829def01f94582b619650a2b3d4e138b05b06ae3566beb0a314a98c860130->enter($__internal_f28829def01f94582b619650a2b3d4e138b05b06ae3566beb0a314a98c860130_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "top"));

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
        
        $__internal_f28829def01f94582b619650a2b3d4e138b05b06ae3566beb0a314a98c860130->leave($__internal_f28829def01f94582b619650a2b3d4e138b05b06ae3566beb0a314a98c860130_prof);

        
        $__internal_87f3613212e66d1ce9bf54323dd9dc0d2deed697b3b89f5318e3f193f26dffa2->leave($__internal_87f3613212e66d1ce9bf54323dd9dc0d2deed697b3b89f5318e3f193f26dffa2_prof);

    }

    // line 43
    public function block_header($context, array $blocks = array())
    {
        $__internal_b5950cbd3d7e22288a99bb1e002facc275f9c779447fbd391547fd0648e147b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5950cbd3d7e22288a99bb1e002facc275f9c779447fbd391547fd0648e147b4->enter($__internal_b5950cbd3d7e22288a99bb1e002facc275f9c779447fbd391547fd0648e147b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_485a3453032cc5c1b29076b37ab761c5f421e8fb64e9e974d019edb84fb71d62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_485a3453032cc5c1b29076b37ab761c5f421e8fb64e9e974d019edb84fb71d62->enter($__internal_485a3453032cc5c1b29076b37ab761c5f421e8fb64e9e974d019edb84fb71d62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_485a3453032cc5c1b29076b37ab761c5f421e8fb64e9e974d019edb84fb71d62->leave($__internal_485a3453032cc5c1b29076b37ab761c5f421e8fb64e9e974d019edb84fb71d62_prof);

        
        $__internal_b5950cbd3d7e22288a99bb1e002facc275f9c779447fbd391547fd0648e147b4->leave($__internal_b5950cbd3d7e22288a99bb1e002facc275f9c779447fbd391547fd0648e147b4_prof);

    }

    // line 57
    public function block_content($context, array $blocks = array())
    {
        $__internal_497ab38a0bc62dc43856e8c8adc173282720ae33eff4fd286db856aac310796f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_497ab38a0bc62dc43856e8c8adc173282720ae33eff4fd286db856aac310796f->enter($__internal_497ab38a0bc62dc43856e8c8adc173282720ae33eff4fd286db856aac310796f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_bc7a265a29dbbf092d329b20ae65b0f9c04121653558f77d61321fb8b3dda3a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc7a265a29dbbf092d329b20ae65b0f9c04121653558f77d61321fb8b3dda3a6->enter($__internal_bc7a265a29dbbf092d329b20ae65b0f9c04121653558f77d61321fb8b3dda3a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 58
        echo "        ";
        
        $__internal_bc7a265a29dbbf092d329b20ae65b0f9c04121653558f77d61321fb8b3dda3a6->leave($__internal_bc7a265a29dbbf092d329b20ae65b0f9c04121653558f77d61321fb8b3dda3a6_prof);

        
        $__internal_497ab38a0bc62dc43856e8c8adc173282720ae33eff4fd286db856aac310796f->leave($__internal_497ab38a0bc62dc43856e8c8adc173282720ae33eff4fd286db856aac310796f_prof);

    }

    // line 63
    public function block_footer($context, array $blocks = array())
    {
        $__internal_4bd36952a76c3670d7154db14a7660eba62303ced73298259762e43dd643de8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bd36952a76c3670d7154db14a7660eba62303ced73298259762e43dd643de8d->enter($__internal_4bd36952a76c3670d7154db14a7660eba62303ced73298259762e43dd643de8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_408b962042c1f97512cfd5acb50ee8170d7b160af400ea9f52d8a4643e8afa4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_408b962042c1f97512cfd5acb50ee8170d7b160af400ea9f52d8a4643e8afa4d->enter($__internal_408b962042c1f97512cfd5acb50ee8170d7b160af400ea9f52d8a4643e8afa4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 64
        echo "        ";
        $this->loadTemplate("@SyliusShop/_footer.html.twig", "@SyliusShop/layout.html.twig", 64)->display($context);
        // line 65
        echo "    ";
        
        $__internal_408b962042c1f97512cfd5acb50ee8170d7b160af400ea9f52d8a4643e8afa4d->leave($__internal_408b962042c1f97512cfd5acb50ee8170d7b160af400ea9f52d8a4643e8afa4d_prof);

        
        $__internal_4bd36952a76c3670d7154db14a7660eba62303ced73298259762e43dd643de8d->leave($__internal_4bd36952a76c3670d7154db14a7660eba62303ced73298259762e43dd643de8d_prof);

    }

    // line 68
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e0c8544803c5a604cf32c89787faef03ca6b7b6f22917c63ceff12e07607b69d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0c8544803c5a604cf32c89787faef03ca6b7b6f22917c63ceff12e07607b69d->enter($__internal_e0c8544803c5a604cf32c89787faef03ca6b7b6f22917c63ceff12e07607b69d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d5e531ae30bbff5b5b50b266f690ed5e6be374a44b03678a47f94fb0545c4548 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5e531ae30bbff5b5b50b266f690ed5e6be374a44b03678a47f94fb0545c4548->enter($__internal_d5e531ae30bbff5b5b50b266f690ed5e6be374a44b03678a47f94fb0545c4548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_d5e531ae30bbff5b5b50b266f690ed5e6be374a44b03678a47f94fb0545c4548->leave($__internal_d5e531ae30bbff5b5b50b266f690ed5e6be374a44b03678a47f94fb0545c4548_prof);

        
        $__internal_e0c8544803c5a604cf32c89787faef03ca6b7b6f22917c63ceff12e07607b69d->leave($__internal_e0c8544803c5a604cf32c89787faef03ca6b7b6f22917c63ceff12e07607b69d_prof);

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
", "@SyliusShop/layout.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/layout.html.twig");
    }
}
