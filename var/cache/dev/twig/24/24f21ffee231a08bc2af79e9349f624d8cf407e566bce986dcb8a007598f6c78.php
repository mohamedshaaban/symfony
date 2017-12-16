<?php

/* bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_dc8d5495e669e829f7deac7aa323be4bc5d1b2af573d268929bbadd09862fc39 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_3_layout.html.twig", "bootstrap_3_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_3_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'checkbox_radio_row' => array($this, 'block_checkbox_radio_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1fefdef998425a5250167aeaea72d35de459f40f231045a2c309d8571269128a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fefdef998425a5250167aeaea72d35de459f40f231045a2c309d8571269128a->enter($__internal_1fefdef998425a5250167aeaea72d35de459f40f231045a2c309d8571269128a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_cd166d79e7676d08d84090fcc38cf015e158c205d26660c2e35c132fe7334470 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd166d79e7676d08d84090fcc38cf015e158c205d26660c2e35c132fe7334470->enter($__internal_cd166d79e7676d08d84090fcc38cf015e158c205d26660c2e35c132fe7334470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 7
        echo "
";
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('form_label', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 24
        echo "
";
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('form_row', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 40
        echo "
";
        // line 41
        $this->displayBlock('radio_row', $context, $blocks);
        // line 44
        echo "
";
        // line 45
        $this->displayBlock('checkbox_radio_row', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('submit_row', $context, $blocks);
        // line 67
        echo "
";
        // line 68
        $this->displayBlock('reset_row', $context, $blocks);
        // line 78
        echo "
";
        // line 79
        $this->displayBlock('form_group_class', $context, $blocks);
        
        $__internal_1fefdef998425a5250167aeaea72d35de459f40f231045a2c309d8571269128a->leave($__internal_1fefdef998425a5250167aeaea72d35de459f40f231045a2c309d8571269128a_prof);

        
        $__internal_cd166d79e7676d08d84090fcc38cf015e158c205d26660c2e35c132fe7334470->leave($__internal_cd166d79e7676d08d84090fcc38cf015e158c205d26660c2e35c132fe7334470_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_1ccefa8c828b890a2fdfbc57d199aec4b19f9bb784e88888b86a3eb8524fcb8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ccefa8c828b890a2fdfbc57d199aec4b19f9bb784e88888b86a3eb8524fcb8b->enter($__internal_1ccefa8c828b890a2fdfbc57d199aec4b19f9bb784e88888b86a3eb8524fcb8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_f6ae297e9fa5e07977ec6888e8a30314986eb511fae9215802f8eaaf99c0fe8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6ae297e9fa5e07977ec6888e8a30314986eb511fae9215802f8eaaf99c0fe8c->enter($__internal_f6ae297e9fa5e07977ec6888e8a30314986eb511fae9215802f8eaaf99c0fe8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 4, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_f6ae297e9fa5e07977ec6888e8a30314986eb511fae9215802f8eaaf99c0fe8c->leave($__internal_f6ae297e9fa5e07977ec6888e8a30314986eb511fae9215802f8eaaf99c0fe8c_prof);

        
        $__internal_1ccefa8c828b890a2fdfbc57d199aec4b19f9bb784e88888b86a3eb8524fcb8b->leave($__internal_1ccefa8c828b890a2fdfbc57d199aec4b19f9bb784e88888b86a3eb8524fcb8b_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_3e16e5cef96f6fc3cdb799ef0661249c6967c5bce044cd725be259b4777f54b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e16e5cef96f6fc3cdb799ef0661249c6967c5bce044cd725be259b4777f54b4->enter($__internal_3e16e5cef96f6fc3cdb799ef0661249c6967c5bce044cd725be259b4777f54b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_103908f8afdb3ba8240602c8ccacf176a8d0a32315990b0b45d9c1d070d8cb00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_103908f8afdb3ba8240602c8ccacf176a8d0a32315990b0b45d9c1d070d8cb00->enter($__internal_103908f8afdb3ba8240602c8ccacf176a8d0a32315990b0b45d9c1d070d8cb00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 11
        ob_start();
        // line 12
        echo "    ";
        if (((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 12, $this->getSourceContext()); })()) === false)) {
            // line 13
            echo "        <div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>
    ";
        } else {
            // line 15
            echo "        ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 15, $this->getSourceContext()); })()), array("class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 16
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_103908f8afdb3ba8240602c8ccacf176a8d0a32315990b0b45d9c1d070d8cb00->leave($__internal_103908f8afdb3ba8240602c8ccacf176a8d0a32315990b0b45d9c1d070d8cb00_prof);

        
        $__internal_3e16e5cef96f6fc3cdb799ef0661249c6967c5bce044cd725be259b4777f54b4->leave($__internal_3e16e5cef96f6fc3cdb799ef0661249c6967c5bce044cd725be259b4777f54b4_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_679b4a1b2cce705e023d15d3bb00f40bf90c31b60ab4af13b7ee1f52ed493832 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_679b4a1b2cce705e023d15d3bb00f40bf90c31b60ab4af13b7ee1f52ed493832->enter($__internal_679b4a1b2cce705e023d15d3bb00f40bf90c31b60ab4af13b7ee1f52ed493832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_e71b56948742ed005eec0fc4f77b86c0c8102cbfce840f419c45e75c2c69f9f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e71b56948742ed005eec0fc4f77b86c0c8102cbfce840f419c45e75c2c69f9f3->enter($__internal_e71b56948742ed005eec0fc4f77b86c0c8102cbfce840f419c45e75c2c69f9f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 22
        echo "col-sm-2";
        
        $__internal_e71b56948742ed005eec0fc4f77b86c0c8102cbfce840f419c45e75c2c69f9f3->leave($__internal_e71b56948742ed005eec0fc4f77b86c0c8102cbfce840f419c45e75c2c69f9f3_prof);

        
        $__internal_679b4a1b2cce705e023d15d3bb00f40bf90c31b60ab4af13b7ee1f52ed493832->leave($__internal_679b4a1b2cce705e023d15d3bb00f40bf90c31b60ab4af13b7ee1f52ed493832_prof);

    }

    // line 27
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_7d395629350c0b60d3444e235115d3c0f5c2b6bd273fe088c61c654b6d00d301 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d395629350c0b60d3444e235115d3c0f5c2b6bd273fe088c61c654b6d00d301->enter($__internal_7d395629350c0b60d3444e235115d3c0f5c2b6bd273fe088c61c654b6d00d301_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_471486d1d63f3dc3f2c53cecaea7c165627688bb3cb3abfbbbe39bf08d2cc65d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_471486d1d63f3dc3f2c53cecaea7c165627688bb3cb3abfbbbe39bf08d2cc65d->enter($__internal_471486d1d63f3dc3f2c53cecaea7c165627688bb3cb3abfbbbe39bf08d2cc65d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 28
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 28, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 28, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 28, $this->getSourceContext()); })()))) {
            echo " has-error";
        }
        echo "\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->getSourceContext()); })()), 'label');
        // line 30
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->getSourceContext()); })()), 'widget');
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 32, $this->getSourceContext()); })()), 'errors');
        // line 33
        echo "</div>
";
        // line 34
        echo "</div>";
        
        $__internal_471486d1d63f3dc3f2c53cecaea7c165627688bb3cb3abfbbbe39bf08d2cc65d->leave($__internal_471486d1d63f3dc3f2c53cecaea7c165627688bb3cb3abfbbbe39bf08d2cc65d_prof);

        
        $__internal_7d395629350c0b60d3444e235115d3c0f5c2b6bd273fe088c61c654b6d00d301->leave($__internal_7d395629350c0b60d3444e235115d3c0f5c2b6bd273fe088c61c654b6d00d301_prof);

    }

    // line 37
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_9ecfe616a1253222aa86328296e2ddd8091e218e3e7e4bccd44558ca898f9b45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ecfe616a1253222aa86328296e2ddd8091e218e3e7e4bccd44558ca898f9b45->enter($__internal_9ecfe616a1253222aa86328296e2ddd8091e218e3e7e4bccd44558ca898f9b45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_16272bd9aaab289b8086ab0f0f52c4ac8fcd5135b89ac2d02c561ee83e19bd6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16272bd9aaab289b8086ab0f0f52c4ac8fcd5135b89ac2d02c561ee83e19bd6a->enter($__internal_16272bd9aaab289b8086ab0f0f52c4ac8fcd5135b89ac2d02c561ee83e19bd6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 38
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_16272bd9aaab289b8086ab0f0f52c4ac8fcd5135b89ac2d02c561ee83e19bd6a->leave($__internal_16272bd9aaab289b8086ab0f0f52c4ac8fcd5135b89ac2d02c561ee83e19bd6a_prof);

        
        $__internal_9ecfe616a1253222aa86328296e2ddd8091e218e3e7e4bccd44558ca898f9b45->leave($__internal_9ecfe616a1253222aa86328296e2ddd8091e218e3e7e4bccd44558ca898f9b45_prof);

    }

    // line 41
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_3fa3dfbafda0cc9cdef9e95643c53694b1b3d534c55b9314e31b466a2b012ffe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fa3dfbafda0cc9cdef9e95643c53694b1b3d534c55b9314e31b466a2b012ffe->enter($__internal_3fa3dfbafda0cc9cdef9e95643c53694b1b3d534c55b9314e31b466a2b012ffe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_873787c83aef0f90ebc358889d9a7b9507cf307ba03593c25816f3b212511129 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_873787c83aef0f90ebc358889d9a7b9507cf307ba03593c25816f3b212511129->enter($__internal_873787c83aef0f90ebc358889d9a7b9507cf307ba03593c25816f3b212511129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 42
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_873787c83aef0f90ebc358889d9a7b9507cf307ba03593c25816f3b212511129->leave($__internal_873787c83aef0f90ebc358889d9a7b9507cf307ba03593c25816f3b212511129_prof);

        
        $__internal_3fa3dfbafda0cc9cdef9e95643c53694b1b3d534c55b9314e31b466a2b012ffe->leave($__internal_3fa3dfbafda0cc9cdef9e95643c53694b1b3d534c55b9314e31b466a2b012ffe_prof);

    }

    // line 45
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_63cbb5a0746a36af5e7c28edce7466e51d6e401e037b1949d7faf80af857d64b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63cbb5a0746a36af5e7c28edce7466e51d6e401e037b1949d7faf80af857d64b->enter($__internal_63cbb5a0746a36af5e7c28edce7466e51d6e401e037b1949d7faf80af857d64b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        $__internal_41c21916c16c2bc3de0bba538056cf1a2c170962b772fe3e7c6b66c63523d06e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41c21916c16c2bc3de0bba538056cf1a2c170962b772fe3e7c6b66c63523d06e->enter($__internal_41c21916c16c2bc3de0bba538056cf1a2c170962b772fe3e7c6b66c63523d06e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        // line 46
        ob_start();
        // line 47
        echo "    <div class=\"form-group";
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 47, $this->getSourceContext()); })())) {
            echo " has-error";
        }
        echo "\">
        <div class=\"";
        // line 48
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 49
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 50
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 50, $this->getSourceContext()); })()), 'widget');
        echo "
            ";
        // line 51
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 51, $this->getSourceContext()); })()), 'errors');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_41c21916c16c2bc3de0bba538056cf1a2c170962b772fe3e7c6b66c63523d06e->leave($__internal_41c21916c16c2bc3de0bba538056cf1a2c170962b772fe3e7c6b66c63523d06e_prof);

        
        $__internal_63cbb5a0746a36af5e7c28edce7466e51d6e401e037b1949d7faf80af857d64b->leave($__internal_63cbb5a0746a36af5e7c28edce7466e51d6e401e037b1949d7faf80af857d64b_prof);

    }

    // line 57
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_f56f124280dfcf854901546e0a0bf81a127c74cbdffa1b05dde66637d90f89bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f56f124280dfcf854901546e0a0bf81a127c74cbdffa1b05dde66637d90f89bf->enter($__internal_f56f124280dfcf854901546e0a0bf81a127c74cbdffa1b05dde66637d90f89bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_4af84a9bcf4836de3ff87bc81d35a5bca7943584ff2dd22f93a69572e047f49c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4af84a9bcf4836de3ff87bc81d35a5bca7943584ff2dd22f93a69572e047f49c->enter($__internal_4af84a9bcf4836de3ff87bc81d35a5bca7943584ff2dd22f93a69572e047f49c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 58
        ob_start();
        // line 59
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 60
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 61
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 62
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 62, $this->getSourceContext()); })()), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_4af84a9bcf4836de3ff87bc81d35a5bca7943584ff2dd22f93a69572e047f49c->leave($__internal_4af84a9bcf4836de3ff87bc81d35a5bca7943584ff2dd22f93a69572e047f49c_prof);

        
        $__internal_f56f124280dfcf854901546e0a0bf81a127c74cbdffa1b05dde66637d90f89bf->leave($__internal_f56f124280dfcf854901546e0a0bf81a127c74cbdffa1b05dde66637d90f89bf_prof);

    }

    // line 68
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_8338e3187d646c9e3aa8bfac38ccb444af98d1005058733ed58c51168a33192f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8338e3187d646c9e3aa8bfac38ccb444af98d1005058733ed58c51168a33192f->enter($__internal_8338e3187d646c9e3aa8bfac38ccb444af98d1005058733ed58c51168a33192f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_9e08f3a95f5c317ea92b04b13405e31a768a02c2ce38c09394caa407eff73265 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e08f3a95f5c317ea92b04b13405e31a768a02c2ce38c09394caa407eff73265->enter($__internal_9e08f3a95f5c317ea92b04b13405e31a768a02c2ce38c09394caa407eff73265_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 69
        ob_start();
        // line 70
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 71
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 72
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 73
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 73, $this->getSourceContext()); })()), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_9e08f3a95f5c317ea92b04b13405e31a768a02c2ce38c09394caa407eff73265->leave($__internal_9e08f3a95f5c317ea92b04b13405e31a768a02c2ce38c09394caa407eff73265_prof);

        
        $__internal_8338e3187d646c9e3aa8bfac38ccb444af98d1005058733ed58c51168a33192f->leave($__internal_8338e3187d646c9e3aa8bfac38ccb444af98d1005058733ed58c51168a33192f_prof);

    }

    // line 79
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_fc51f446685e317e11009b9e4467be36c1af746f8cf2827579a7765576d7e9d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc51f446685e317e11009b9e4467be36c1af746f8cf2827579a7765576d7e9d8->enter($__internal_fc51f446685e317e11009b9e4467be36c1af746f8cf2827579a7765576d7e9d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_4804ee9713933bf3dee88bacc6149801d2a51eab17ecbd2cc29ad6a9f712d456 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4804ee9713933bf3dee88bacc6149801d2a51eab17ecbd2cc29ad6a9f712d456->enter($__internal_4804ee9713933bf3dee88bacc6149801d2a51eab17ecbd2cc29ad6a9f712d456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 80
        echo "col-sm-10";
        
        $__internal_4804ee9713933bf3dee88bacc6149801d2a51eab17ecbd2cc29ad6a9f712d456->leave($__internal_4804ee9713933bf3dee88bacc6149801d2a51eab17ecbd2cc29ad6a9f712d456_prof);

        
        $__internal_fc51f446685e317e11009b9e4467be36c1af746f8cf2827579a7765576d7e9d8->leave($__internal_fc51f446685e317e11009b9e4467be36c1af746f8cf2827579a7765576d7e9d8_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  390 => 80,  381 => 79,  366 => 73,  362 => 72,  358 => 71,  355 => 70,  353 => 69,  344 => 68,  329 => 62,  325 => 61,  321 => 60,  318 => 59,  316 => 58,  307 => 57,  292 => 51,  288 => 50,  284 => 49,  280 => 48,  273 => 47,  271 => 46,  262 => 45,  252 => 42,  243 => 41,  233 => 38,  224 => 37,  214 => 34,  211 => 33,  209 => 32,  207 => 31,  203 => 30,  201 => 29,  195 => 28,  186 => 27,  176 => 22,  167 => 21,  155 => 16,  152 => 15,  146 => 13,  143 => 12,  141 => 11,  132 => 10,  122 => 5,  120 => 4,  111 => 3,  101 => 79,  98 => 78,  96 => 68,  93 => 67,  91 => 57,  88 => 56,  86 => 45,  83 => 44,  81 => 41,  78 => 40,  76 => 37,  73 => 36,  71 => 27,  68 => 26,  65 => 24,  63 => 21,  60 => 20,  58 => 10,  55 => 9,  52 => 7,  50 => 3,  47 => 2,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_3_layout.html.twig\" %}

{% block form_start -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-horizontal')|trim}) %}
    {{- parent() -}}
{%- endblock form_start %}

{# Labels #}

{% block form_label -%}
{% spaceless %}
    {% if label is same as(false) %}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {% else %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) %}
        {{- parent() -}}
    {% endif %}
{% endspaceless %}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>
{##}</div>
{%- endblock form_row %}

{% block checkbox_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock checkbox_row %}

{% block radio_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock radio_row %}

{% block checkbox_radio_row -%}
{% spaceless %}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{% endspaceless %}
{%- endblock checkbox_radio_row %}

{% block submit_row -%}
{% spaceless %}
    <div class=\"form-group\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock submit_row %}

{% block reset_row -%}
{% spaceless %}
    <div class=\"form-group\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock reset_row %}

{% block form_group_class -%}
col-sm-10
{%- endblock form_group_class %}
", "bootstrap_3_horizontal_layout.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\bootstrap_3_horizontal_layout.html.twig");
    }
}
