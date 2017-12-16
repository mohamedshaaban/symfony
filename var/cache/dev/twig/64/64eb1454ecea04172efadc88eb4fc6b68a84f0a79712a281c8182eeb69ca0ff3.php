<?php

/* @SyliusUi/Form/theme.html.twig */
class __TwigTemplate_66668b8e12a23395db57c468bf8fa1bfb9b3e3007146604cebc463881fa9f31e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "@SyliusUi/Form/theme.html.twig", 1);
        $this->blocks = array(
            'form_row' => array($this, 'block_form_row'),
            'form_errors' => array($this, 'block_form_errors'),
            'checkbox_row' => array($this, 'block_checkbox_row'),
            'radio_row' => array($this, 'block_radio_row'),
            'money_widget' => array($this, 'block_money_widget'),
            'choice_row' => array($this, 'block_choice_row'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'collection_widget' => array($this, 'block_collection_widget'),
            'sylius_province_widget' => array($this, 'block_sylius_province_widget'),
            'sylius_zone_member_widget' => array($this, 'block_sylius_zone_member_widget'),
            'sylius_promotion_rule_widget' => array($this, 'block_sylius_promotion_rule_widget'),
            'sylius_promotion_action_widget' => array($this, 'block_sylius_promotion_action_widget'),
            'sylius_promotion_configuration_widget' => array($this, 'block_sylius_promotion_configuration_widget'),
            'sylius_product_option_value_widget' => array($this, 'block_sylius_product_option_value_widget'),
            'sylius_translations_row' => array($this, 'block_sylius_translations_row'),
            'sylius_resource_autocomplete_choice_row' => array($this, 'block_sylius_resource_autocomplete_choice_row'),
            'sylius_product_variant_generation_widget' => array($this, 'block_sylius_product_variant_generation_widget'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3de5ba52c16305b0b0a52786fc4521495bdab1d2fcfac2d9e3d9aadce53cd6bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3de5ba52c16305b0b0a52786fc4521495bdab1d2fcfac2d9e3d9aadce53cd6bd->enter($__internal_3de5ba52c16305b0b0a52786fc4521495bdab1d2fcfac2d9e3d9aadce53cd6bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusUi/Form/theme.html.twig"));

        $__internal_623cb4990254fa656dfe2cfb64a8a46f32cc8cba06ac4de2071a39b8ff3cf644 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_623cb4990254fa656dfe2cfb64a8a46f32cc8cba06ac4de2071a39b8ff3cf644->enter($__internal_623cb4990254fa656dfe2cfb64a8a46f32cc8cba06ac4de2071a39b8ff3cf644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusUi/Form/theme.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3de5ba52c16305b0b0a52786fc4521495bdab1d2fcfac2d9e3d9aadce53cd6bd->leave($__internal_3de5ba52c16305b0b0a52786fc4521495bdab1d2fcfac2d9e3d9aadce53cd6bd_prof);

        
        $__internal_623cb4990254fa656dfe2cfb64a8a46f32cc8cba06ac4de2071a39b8ff3cf644->leave($__internal_623cb4990254fa656dfe2cfb64a8a46f32cc8cba06ac4de2071a39b8ff3cf644_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_12aeab77376a1b02e8b25d3d28c3cb6fca6aca1352557011af443ea8b5169ba9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12aeab77376a1b02e8b25d3d28c3cb6fca6aca1352557011af443ea8b5169ba9->enter($__internal_12aeab77376a1b02e8b25d3d28c3cb6fca6aca1352557011af443ea8b5169ba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_514f772ce3d1210ad00cdbb37892885ab7db74ad7e584465601910921432c7f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_514f772ce3d1210ad00cdbb37892885ab7db74ad7e584465601910921432c7f0->enter($__internal_514f772ce3d1210ad00cdbb37892885ab7db74ad7e584465601910921432c7f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        echo "<div class=\"";
        if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 4, $this->getSourceContext()); })())) {
            echo "required ";
        }
        echo "field";
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 4, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 4, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 4, $this->getSourceContext()); })()))) {
            echo " error";
        }
        echo "\">";
        // line 5
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 5, $this->getSourceContext()); })()), 'label');
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), 'widget');
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->getSourceContext()); })()), 'errors');
        // line 8
        echo "</div>";
        
        $__internal_514f772ce3d1210ad00cdbb37892885ab7db74ad7e584465601910921432c7f0->leave($__internal_514f772ce3d1210ad00cdbb37892885ab7db74ad7e584465601910921432c7f0_prof);

        
        $__internal_12aeab77376a1b02e8b25d3d28c3cb6fca6aca1352557011af443ea8b5169ba9->leave($__internal_12aeab77376a1b02e8b25d3d28c3cb6fca6aca1352557011af443ea8b5169ba9_prof);

    }

    // line 11
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_7e2d92bc3a91b3fe4e998522a1ebdf9723edf18469df84e95d530e570855775a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e2d92bc3a91b3fe4e998522a1ebdf9723edf18469df84e95d530e570855775a->enter($__internal_7e2d92bc3a91b3fe4e998522a1ebdf9723edf18469df84e95d530e570855775a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_3918302f4a4b28f0867912f68a2a5bb60164cd6f10223fbc229120efcf078328 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3918302f4a4b28f0867912f68a2a5bb60164cd6f10223fbc229120efcf078328->enter($__internal_3918302f4a4b28f0867912f68a2a5bb60164cd6f10223fbc229120efcf078328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 12
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 12, $this->getSourceContext()); })())) > 0)) {
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 13, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 14
                echo "<div class=\"ui red ";
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 14, $this->getSourceContext()); })()), "parent", array()))) {
                    echo "pointing ";
                }
                echo "label sylius-validation-error\"";
                if (twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 14, $this->getSourceContext()); })()), "parent", array()))) {
                    echo " style=\"margin-bottom: 10px;\"";
                }
                echo ">
                ";
                // line 15
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["error"], "message", array()), "html", null, true);
                echo "
            </div>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_3918302f4a4b28f0867912f68a2a5bb60164cd6f10223fbc229120efcf078328->leave($__internal_3918302f4a4b28f0867912f68a2a5bb60164cd6f10223fbc229120efcf078328_prof);

        
        $__internal_7e2d92bc3a91b3fe4e998522a1ebdf9723edf18469df84e95d530e570855775a->leave($__internal_7e2d92bc3a91b3fe4e998522a1ebdf9723edf18469df84e95d530e570855775a_prof);

    }

    // line 21
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_7d5411bfb64616c516b9ed066ecdab04d4891e9232121a11d2ec0f7dfe90cf66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d5411bfb64616c516b9ed066ecdab04d4891e9232121a11d2ec0f7dfe90cf66->enter($__internal_7d5411bfb64616c516b9ed066ecdab04d4891e9232121a11d2ec0f7dfe90cf66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_45cf19929f961384027c913f2396e3dc0183f4348c2427ab4bf08850aafbca0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45cf19929f961384027c913f2396e3dc0183f4348c2427ab4bf08850aafbca0a->enter($__internal_45cf19929f961384027c913f2396e3dc0183f4348c2427ab4bf08850aafbca0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 22
        echo "<div class=\"field";
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 22, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 22, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 22, $this->getSourceContext()); })()))) {
            echo " error";
        }
        echo "\">
        <div class=\"ui toggle checkbox\">";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 24, $this->getSourceContext()); })()), 'widget');
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 25, $this->getSourceContext()); })()), 'label');
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 26, $this->getSourceContext()); })()), 'errors');
        // line 27
        echo "</div>
    </div>";
        
        $__internal_45cf19929f961384027c913f2396e3dc0183f4348c2427ab4bf08850aafbca0a->leave($__internal_45cf19929f961384027c913f2396e3dc0183f4348c2427ab4bf08850aafbca0a_prof);

        
        $__internal_7d5411bfb64616c516b9ed066ecdab04d4891e9232121a11d2ec0f7dfe90cf66->leave($__internal_7d5411bfb64616c516b9ed066ecdab04d4891e9232121a11d2ec0f7dfe90cf66_prof);

    }

    // line 31
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_dfd07b2ca1dec79459c16e8c0a96a3de60e6aa1a56f314f69b96da63b131b746 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfd07b2ca1dec79459c16e8c0a96a3de60e6aa1a56f314f69b96da63b131b746->enter($__internal_dfd07b2ca1dec79459c16e8c0a96a3de60e6aa1a56f314f69b96da63b131b746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_2b87f1aa4df8927310b7e63bc6edfffffe0757e7102d093b41733d4e12e61bba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b87f1aa4df8927310b7e63bc6edfffffe0757e7102d093b41733d4e12e61bba->enter($__internal_2b87f1aa4df8927310b7e63bc6edfffffe0757e7102d093b41733d4e12e61bba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 32
        echo "<div class=\"field";
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 32, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 32, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 32, $this->getSourceContext()); })()))) {
            echo " error";
        }
        echo "\">
        <div class=\"ui radio checkbox\">";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->getSourceContext()); })()), 'label');
        // line 35
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 35, $this->getSourceContext()); })()), 'widget');
        // line 36
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 36, $this->getSourceContext()); })()), 'errors');
        // line 37
        echo "</div>
    </div>";
        
        $__internal_2b87f1aa4df8927310b7e63bc6edfffffe0757e7102d093b41733d4e12e61bba->leave($__internal_2b87f1aa4df8927310b7e63bc6edfffffe0757e7102d093b41733d4e12e61bba_prof);

        
        $__internal_dfd07b2ca1dec79459c16e8c0a96a3de60e6aa1a56f314f69b96da63b131b746->leave($__internal_dfd07b2ca1dec79459c16e8c0a96a3de60e6aa1a56f314f69b96da63b131b746_prof);

    }

    // line 41
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_7e7dd4cad091afa339c5b4f21e84a122d316a4cc61d2d03010b4ebd29b7deefd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e7dd4cad091afa339c5b4f21e84a122d316a4cc61d2d03010b4ebd29b7deefd->enter($__internal_7e7dd4cad091afa339c5b4f21e84a122d316a4cc61d2d03010b4ebd29b7deefd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_0896bfbfff9601514ba4e36e6ac99a7eb80d91c1f8fe11b0530fcd6d6cf18fdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0896bfbfff9601514ba4e36e6ac99a7eb80d91c1f8fe11b0530fcd6d6cf18fdb->enter($__internal_0896bfbfff9601514ba4e36e6ac99a7eb80d91c1f8fe11b0530fcd6d6cf18fdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 42
        echo "<div class=\"ui labeled input\">
        <div class=\"ui label\">";
        // line 43
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('sylius_currency_symbol')->getCallable(), array((isset($context["currency"]) || array_key_exists("currency", $context) ? $context["currency"] : (function () { throw new Twig_Error_Runtime('Variable "currency" does not exist.', 43, $this->getSourceContext()); })()))), "html", null, true);
        echo "</div>";
        // line 44
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 44, $this->getSourceContext()); })()), 'widget');
        // line 45
        echo "</div>";
        
        $__internal_0896bfbfff9601514ba4e36e6ac99a7eb80d91c1f8fe11b0530fcd6d6cf18fdb->leave($__internal_0896bfbfff9601514ba4e36e6ac99a7eb80d91c1f8fe11b0530fcd6d6cf18fdb_prof);

        
        $__internal_7e7dd4cad091afa339c5b4f21e84a122d316a4cc61d2d03010b4ebd29b7deefd->leave($__internal_7e7dd4cad091afa339c5b4f21e84a122d316a4cc61d2d03010b4ebd29b7deefd_prof);

    }

    // line 48
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_c89cad0a4d2e7350290a7696392bbcba690c93b1a2cd53c062a13073535f8ead = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c89cad0a4d2e7350290a7696392bbcba690c93b1a2cd53c062a13073535f8ead->enter($__internal_c89cad0a4d2e7350290a7696392bbcba690c93b1a2cd53c062a13073535f8ead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_c5f12ab20068c93bd3643e0a2eba80e1cc92edb36666f180eb229cac81977a8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5f12ab20068c93bd3643e0a2eba80e1cc92edb36666f180eb229cac81977a8b->enter($__internal_c5f12ab20068c93bd3643e0a2eba80e1cc92edb36666f180eb229cac81977a8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 49
        echo "<div class=\"";
        if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 49, $this->getSourceContext()); })())) {
            echo "required ";
        }
        echo "field";
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 49, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 49, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 49, $this->getSourceContext()); })()))) {
            echo " error";
        }
        echo "\">";
        // line 50
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 50, $this->getSourceContext()); })()), 'label');
        // line 51
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 51, $this->getSourceContext()); })()), array("class" => (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()))) : ("")) . " ui dropdown")));
        // line 52
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 52, $this->getSourceContext()); })()), 'widget', array("attr" => (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 52, $this->getSourceContext()); })())));
        // line 53
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 53, $this->getSourceContext()); })()), 'errors');
        // line 54
        echo "</div>";
        
        $__internal_c5f12ab20068c93bd3643e0a2eba80e1cc92edb36666f180eb229cac81977a8b->leave($__internal_c5f12ab20068c93bd3643e0a2eba80e1cc92edb36666f180eb229cac81977a8b_prof);

        
        $__internal_c89cad0a4d2e7350290a7696392bbcba690c93b1a2cd53c062a13073535f8ead->leave($__internal_c89cad0a4d2e7350290a7696392bbcba690c93b1a2cd53c062a13073535f8ead_prof);

    }

    // line 57
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_fbc7269a17637c6b9502aaca9eec3649e861123791b70dcec15165b9fc2ced5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbc7269a17637c6b9502aaca9eec3649e861123791b70dcec15165b9fc2ced5b->enter($__internal_fbc7269a17637c6b9502aaca9eec3649e861123791b70dcec15165b9fc2ced5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_cb714a1599c91176534f219101647345ad77a6398105b1a4a992a3bf0f2ecaeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb714a1599c91176534f219101647345ad77a6398105b1a4a992a3bf0f2ecaeb->enter($__internal_cb714a1599c91176534f219101647345ad77a6398105b1a4a992a3bf0f2ecaeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 58
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
        <div class=\"grouped fields\">";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 60, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 61
            echo "                <div class=\"field\">
                    <div class=\"ui toggle checkbox\">";
            // line 63
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'label', array("translation_domain" => (isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 63, $this->getSourceContext()); })())));
            // line 64
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget');
            // line 65
            echo "</div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "</div>
    </div>";
        
        $__internal_cb714a1599c91176534f219101647345ad77a6398105b1a4a992a3bf0f2ecaeb->leave($__internal_cb714a1599c91176534f219101647345ad77a6398105b1a4a992a3bf0f2ecaeb_prof);

        
        $__internal_fbc7269a17637c6b9502aaca9eec3649e861123791b70dcec15165b9fc2ced5b->leave($__internal_fbc7269a17637c6b9502aaca9eec3649e861123791b70dcec15165b9fc2ced5b_prof);

    }

    // line 72
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_017a2c78448c49f54b3f3f2ae8a61acb4bf5e3ce354e31ebd6bab34f93b7b926 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_017a2c78448c49f54b3f3f2ae8a61acb4bf5e3ce354e31ebd6bab34f93b7b926->enter($__internal_017a2c78448c49f54b3f3f2ae8a61acb4bf5e3ce354e31ebd6bab34f93b7b926_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_8b6a368984b1d1a18e5bf38cca5230494ed597b944b3b56d8eea2b2b7fae0d11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b6a368984b1d1a18e5bf38cca5230494ed597b944b3b56d8eea2b2b7fae0d11->enter($__internal_8b6a368984b1d1a18e5bf38cca5230494ed597b944b3b56d8eea2b2b7fae0d11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 73
        echo "<div class=\"ui right labeled input\">";
        // line 74
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 74, $this->getSourceContext()); })()), 'widget');
        // line 75
        echo "<div class=\"ui basic label\">%</div>
    </div>";
        
        $__internal_8b6a368984b1d1a18e5bf38cca5230494ed597b944b3b56d8eea2b2b7fae0d11->leave($__internal_8b6a368984b1d1a18e5bf38cca5230494ed597b944b3b56d8eea2b2b7fae0d11_prof);

        
        $__internal_017a2c78448c49f54b3f3f2ae8a61acb4bf5e3ce354e31ebd6bab34f93b7b926->leave($__internal_017a2c78448c49f54b3f3f2ae8a61acb4bf5e3ce354e31ebd6bab34f93b7b926_prof);

    }

    // line 79
    public function block_collection_widget($context, array $blocks = array())
    {
        $__internal_d0958adbc23d8f3e882b0337a5dc75cfb509c3ca060533f3dd777a8db7d337bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0958adbc23d8f3e882b0337a5dc75cfb509c3ca060533f3dd777a8db7d337bb->enter($__internal_d0958adbc23d8f3e882b0337a5dc75cfb509c3ca060533f3dd777a8db7d337bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        $__internal_3401e44a9d16a55de063d11e85a32071d386d4bfc703c6ef535036a445e773f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3401e44a9d16a55de063d11e85a32071d386d4bfc703c6ef535036a445e773f1->enter($__internal_3401e44a9d16a55de063d11e85a32071d386d4bfc703c6ef535036a445e773f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        // line 80
        $context["__internal_da87d008d931e8a928626a219b1f0660ddca3fea0837f88349fc83e851dd70bf"] = $this->loadTemplate("SyliusResourceBundle:Macros:notification.html.twig", "@SyliusUi/Form/theme.html.twig", 80);
        // line 81
        echo "    ";
        $context["self"] = $this;
        // line 82
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 82, $this->getSourceContext()); })()), array("class" => (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()))) : ("")) . " controls collection-widget")));
        // line 83
        echo "
    ";
        // line 84
        ob_start();
        // line 85
        echo "        <div data-form-type=\"collection\" ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo "
            ";
        // line 86
        if ((array_key_exists("prototype", $context) && (isset($context["allow_add"]) || array_key_exists("allow_add", $context) ? $context["allow_add"] : (function () { throw new Twig_Error_Runtime('Variable "allow_add" does not exist.', 86, $this->getSourceContext()); })()))) {
            // line 87
            echo "                data-prototype='";
            echo twig_escape_filter($this->env, $context["self"]->macro_collection_item((isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new Twig_Error_Runtime('Variable "prototype" does not exist.', 87, $this->getSourceContext()); })()), (isset($context["allow_delete"]) || array_key_exists("allow_delete", $context) ? $context["allow_delete"] : (function () { throw new Twig_Error_Runtime('Variable "allow_delete" does not exist.', 87, $this->getSourceContext()); })()), (isset($context["button_delete_label"]) || array_key_exists("button_delete_label", $context) ? $context["button_delete_label"] : (function () { throw new Twig_Error_Runtime('Variable "button_delete_label" does not exist.', 87, $this->getSourceContext()); })()), "__name__"));
            echo "'";
        }
        // line 89
        echo ">
            ";
        // line 90
        echo $context["__internal_da87d008d931e8a928626a219b1f0660ddca3fea0837f88349fc83e851dd70bf"]->macro_error(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 90, $this->getSourceContext()); })()), "vars", array()), "errors", array()));
        echo "

            ";
        // line 92
        if (twig_test_iterable(((array_key_exists("prototypes", $context)) ? (_twig_default_filter((isset($context["prototypes"]) || array_key_exists("prototypes", $context) ? $context["prototypes"] : (function () { throw new Twig_Error_Runtime('Variable "prototypes" does not exist.', 92, $this->getSourceContext()); })()))) : ("")))) {
            // line 93
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["prototypes"]) || array_key_exists("prototypes", $context) ? $context["prototypes"] : (function () { throw new Twig_Error_Runtime('Variable "prototypes" does not exist.', 93, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["key"] => $context["subPrototype"]) {
                // line 94
                echo "                    <input type=\"hidden\" data-form-prototype=\"";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $context["self"]->macro_collection_item($context["subPrototype"], (isset($context["allow_delete"]) || array_key_exists("allow_delete", $context) ? $context["allow_delete"] : (function () { throw new Twig_Error_Runtime('Variable "allow_delete" does not exist.', 94, $this->getSourceContext()); })()), (isset($context["button_delete_label"]) || array_key_exists("button_delete_label", $context) ? $context["button_delete_label"] : (function () { throw new Twig_Error_Runtime('Variable "button_delete_label" does not exist.', 94, $this->getSourceContext()); })()), "__name__"));
                echo "\" />
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['subPrototype'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 96
            echo "            ";
        }
        // line 97
        echo "
            <div data-form-collection=\"list\">
                ";
        // line 99
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 99, $this->getSourceContext()); })()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 100
            echo "                    ";
            echo $context["self"]->macro_collection_item($context["child"], (isset($context["allow_delete"]) || array_key_exists("allow_delete", $context) ? $context["allow_delete"] : (function () { throw new Twig_Error_Runtime('Variable "allow_delete" does not exist.', 100, $this->getSourceContext()); })()), (isset($context["button_delete_label"]) || array_key_exists("button_delete_label", $context) ? $context["button_delete_label"] : (function () { throw new Twig_Error_Runtime('Variable "button_delete_label" does not exist.', 100, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index0", array()));
            echo "
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "            </div>

            ";
        // line 104
        if ((array_key_exists("prototype", $context) && (isset($context["allow_add"]) || array_key_exists("allow_add", $context) ? $context["allow_add"] : (function () { throw new Twig_Error_Runtime('Variable "allow_add" does not exist.', 104, $this->getSourceContext()); })()))) {
            // line 105
            echo "                <a href=\"#\" class=\"ui labeled icon button\" data-form-collection=\"add\">
                    <i class=\"plus square outline icon\"></i>
                    ";
            // line 107
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["button_add_label"]) || array_key_exists("button_add_label", $context) ? $context["button_add_label"] : (function () { throw new Twig_Error_Runtime('Variable "button_add_label" does not exist.', 107, $this->getSourceContext()); })())), "html", null, true);
            echo "
                </a>
            ";
        }
        // line 110
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_3401e44a9d16a55de063d11e85a32071d386d4bfc703c6ef535036a445e773f1->leave($__internal_3401e44a9d16a55de063d11e85a32071d386d4bfc703c6ef535036a445e773f1_prof);

        
        $__internal_d0958adbc23d8f3e882b0337a5dc75cfb509c3ca060533f3dd777a8db7d337bb->leave($__internal_d0958adbc23d8f3e882b0337a5dc75cfb509c3ca060533f3dd777a8db7d337bb_prof);

    }

    // line 128
    public function block_sylius_province_widget($context, array $blocks = array())
    {
        $__internal_b11022ecc128c87fe443cec7c451d523dcc08bee44432159a67366d3217f8767 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b11022ecc128c87fe443cec7c451d523dcc08bee44432159a67366d3217f8767->enter($__internal_b11022ecc128c87fe443cec7c451d523dcc08bee44432159a67366d3217f8767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_province_widget"));

        $__internal_a6a5c49ab92e72a98d7e5d3db1a7aa9abc4d21f7dae574b768b1e24c50f3066c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6a5c49ab92e72a98d7e5d3db1a7aa9abc4d21f7dae574b768b1e24c50f3066c->enter($__internal_a6a5c49ab92e72a98d7e5d3db1a7aa9abc4d21f7dae574b768b1e24c50f3066c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_province_widget"));

        // line 129
        echo "<div class=\"ui compact segment\">
    <div class=\"inline fields\">
        ";
        // line 131
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 131, $this->getSourceContext()); })()), "code", array()), 'row');
        echo "
        ";
        // line 132
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 132, $this->getSourceContext()); })()), "name", array()), 'row');
        echo "
        ";
        // line 133
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 133, $this->getSourceContext()); })()), "abbreviation", array()), 'row');
        echo "
    </div>
</div>
";
        
        $__internal_a6a5c49ab92e72a98d7e5d3db1a7aa9abc4d21f7dae574b768b1e24c50f3066c->leave($__internal_a6a5c49ab92e72a98d7e5d3db1a7aa9abc4d21f7dae574b768b1e24c50f3066c_prof);

        
        $__internal_b11022ecc128c87fe443cec7c451d523dcc08bee44432159a67366d3217f8767->leave($__internal_b11022ecc128c87fe443cec7c451d523dcc08bee44432159a67366d3217f8767_prof);

    }

    // line 138
    public function block_sylius_zone_member_widget($context, array $blocks = array())
    {
        $__internal_ef634fdb75b1a0d8cf5ce9724038bd3cb6fe310d068f568b76f0f1ad23195ce2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef634fdb75b1a0d8cf5ce9724038bd3cb6fe310d068f568b76f0f1ad23195ce2->enter($__internal_ef634fdb75b1a0d8cf5ce9724038bd3cb6fe310d068f568b76f0f1ad23195ce2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_zone_member_widget"));

        $__internal_559eabd3c10b092e0622e335c9a6059019f6f28b40ac43300ed89c7987ad7a33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_559eabd3c10b092e0622e335c9a6059019f6f28b40ac43300ed89c7987ad7a33->enter($__internal_559eabd3c10b092e0622e335c9a6059019f6f28b40ac43300ed89c7987ad7a33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_zone_member_widget"));

        // line 139
        echo "    <div class=\"ui compact segment\">
        <div class=\"inline fields\">
            ";
        // line 141
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 141, $this->getSourceContext()); })()), "code", array()), 'row');
        echo "
        </div>
    </div>
";
        
        $__internal_559eabd3c10b092e0622e335c9a6059019f6f28b40ac43300ed89c7987ad7a33->leave($__internal_559eabd3c10b092e0622e335c9a6059019f6f28b40ac43300ed89c7987ad7a33_prof);

        
        $__internal_ef634fdb75b1a0d8cf5ce9724038bd3cb6fe310d068f568b76f0f1ad23195ce2->leave($__internal_ef634fdb75b1a0d8cf5ce9724038bd3cb6fe310d068f568b76f0f1ad23195ce2_prof);

    }

    // line 146
    public function block_sylius_promotion_rule_widget($context, array $blocks = array())
    {
        $__internal_e4a052dc8e894ac8e0e56b0fe84586d2de7c6dfa1f55026c14b22b4ceb066488 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4a052dc8e894ac8e0e56b0fe84586d2de7c6dfa1f55026c14b22b4ceb066488->enter($__internal_e4a052dc8e894ac8e0e56b0fe84586d2de7c6dfa1f55026c14b22b4ceb066488_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_promotion_rule_widget"));

        $__internal_f0fec97ac1d14aeec6c4a6267c6ad96e7f5ad95d0f46970e81d5b6aeb6c1206c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0fec97ac1d14aeec6c4a6267c6ad96e7f5ad95d0f46970e81d5b6aeb6c1206c->enter($__internal_f0fec97ac1d14aeec6c4a6267c6ad96e7f5ad95d0f46970e81d5b6aeb6c1206c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_promotion_rule_widget"));

        // line 147
        echo "    <div class=\"ui segment\">
        ";
        // line 148
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 148, $this->getSourceContext()); })()), 'widget');
        echo "
    </div>
";
        
        $__internal_f0fec97ac1d14aeec6c4a6267c6ad96e7f5ad95d0f46970e81d5b6aeb6c1206c->leave($__internal_f0fec97ac1d14aeec6c4a6267c6ad96e7f5ad95d0f46970e81d5b6aeb6c1206c_prof);

        
        $__internal_e4a052dc8e894ac8e0e56b0fe84586d2de7c6dfa1f55026c14b22b4ceb066488->leave($__internal_e4a052dc8e894ac8e0e56b0fe84586d2de7c6dfa1f55026c14b22b4ceb066488_prof);

    }

    // line 152
    public function block_sylius_promotion_action_widget($context, array $blocks = array())
    {
        $__internal_957ad3b89598dda5b7f063e665c27e58797fc74c315334a297165bde03a3af22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_957ad3b89598dda5b7f063e665c27e58797fc74c315334a297165bde03a3af22->enter($__internal_957ad3b89598dda5b7f063e665c27e58797fc74c315334a297165bde03a3af22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_promotion_action_widget"));

        $__internal_940cab6a7dbadf10af8a95af9cd2726a76c5d5387d7bed78458f3eaa600862b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_940cab6a7dbadf10af8a95af9cd2726a76c5d5387d7bed78458f3eaa600862b1->enter($__internal_940cab6a7dbadf10af8a95af9cd2726a76c5d5387d7bed78458f3eaa600862b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_promotion_action_widget"));

        // line 153
        echo "    <div class=\"ui segment\">
        ";
        // line 154
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 154, $this->getSourceContext()); })()), 'widget');
        echo "
    </div>
";
        
        $__internal_940cab6a7dbadf10af8a95af9cd2726a76c5d5387d7bed78458f3eaa600862b1->leave($__internal_940cab6a7dbadf10af8a95af9cd2726a76c5d5387d7bed78458f3eaa600862b1_prof);

        
        $__internal_957ad3b89598dda5b7f063e665c27e58797fc74c315334a297165bde03a3af22->leave($__internal_957ad3b89598dda5b7f063e665c27e58797fc74c315334a297165bde03a3af22_prof);

    }

    // line 158
    public function block_sylius_promotion_configuration_widget($context, array $blocks = array())
    {
        $__internal_05a8cc640c091c7bb18cbd4aaab35a9468dec9b88590c33c9e93a5472ca99fad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05a8cc640c091c7bb18cbd4aaab35a9468dec9b88590c33c9e93a5472ca99fad->enter($__internal_05a8cc640c091c7bb18cbd4aaab35a9468dec9b88590c33c9e93a5472ca99fad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_promotion_configuration_widget"));

        $__internal_a78cecf6e97ec8e2e3aa0f51f86f5b11902e458f645c6483a2da05f547a40518 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a78cecf6e97ec8e2e3aa0f51f86f5b11902e458f645c6483a2da05f547a40518->enter($__internal_a78cecf6e97ec8e2e3aa0f51f86f5b11902e458f645c6483a2da05f547a40518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_promotion_configuration_widget"));

        // line 159
        echo "    <div class=\"configuration\">
        ";
        // line 160
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 160, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 161
            echo "            <hr/>";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'row');
            echo "<hr/>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 163
        echo "    </div>
";
        
        $__internal_a78cecf6e97ec8e2e3aa0f51f86f5b11902e458f645c6483a2da05f547a40518->leave($__internal_a78cecf6e97ec8e2e3aa0f51f86f5b11902e458f645c6483a2da05f547a40518_prof);

        
        $__internal_05a8cc640c091c7bb18cbd4aaab35a9468dec9b88590c33c9e93a5472ca99fad->leave($__internal_05a8cc640c091c7bb18cbd4aaab35a9468dec9b88590c33c9e93a5472ca99fad_prof);

    }

    // line 166
    public function block_sylius_product_option_value_widget($context, array $blocks = array())
    {
        $__internal_bc9f263e557cc74aaab324e5495c97144ee560ec7474f7b9eaf94136702edcc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc9f263e557cc74aaab324e5495c97144ee560ec7474f7b9eaf94136702edcc2->enter($__internal_bc9f263e557cc74aaab324e5495c97144ee560ec7474f7b9eaf94136702edcc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_product_option_value_widget"));

        $__internal_ab7eb1663ba65742bf67a35b90686094dc8e0e2c43029556fbc211183df010e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab7eb1663ba65742bf67a35b90686094dc8e0e2c43029556fbc211183df010e2->enter($__internal_ab7eb1663ba65742bf67a35b90686094dc8e0e2c43029556fbc211183df010e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_product_option_value_widget"));

        // line 167
        echo "    <div class=\"ui segment\">
        ";
        // line 168
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 168, $this->getSourceContext()); })()), "code", array()), 'row');
        echo "
            <div class=\"five fields\">
            ";
        // line 170
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 170, $this->getSourceContext()); })()), "translations", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["locale"] => $context["translationForm"]) {
            // line 171
            echo "                ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), $context["translationForm"], "value", array()), 'row', array("label" => call_user_func_array($this->env->getFilter('sylius_locale_name')->getCallable(), array($context["locale"]))));
            echo "
                ";
            // line 172
            if ((0 == (twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index", array()) % 5))) {
                // line 173
                echo "                </div>
                <div class=\"five fields\">
                ";
            }
            // line 176
            echo "            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['locale'], $context['translationForm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 177
        echo "            </div>
    </div>
";
        
        $__internal_ab7eb1663ba65742bf67a35b90686094dc8e0e2c43029556fbc211183df010e2->leave($__internal_ab7eb1663ba65742bf67a35b90686094dc8e0e2c43029556fbc211183df010e2_prof);

        
        $__internal_bc9f263e557cc74aaab324e5495c97144ee560ec7474f7b9eaf94136702edcc2->leave($__internal_bc9f263e557cc74aaab324e5495c97144ee560ec7474f7b9eaf94136702edcc2_prof);

    }

    // line 181
    public function block_sylius_translations_row($context, array $blocks = array())
    {
        $__internal_47a815ea68d97ca8ecaab18c24784f635a97f091de5ae6623188ad76b8332b70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47a815ea68d97ca8ecaab18c24784f635a97f091de5ae6623188ad76b8332b70->enter($__internal_47a815ea68d97ca8ecaab18c24784f635a97f091de5ae6623188ad76b8332b70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_translations_row"));

        $__internal_477f0ff9a03e1f10901fc102cb1fc67acb41e36b032503ed9f20404e9fa67607 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_477f0ff9a03e1f10901fc102cb1fc67acb41e36b032503ed9f20404e9fa67607->enter($__internal_477f0ff9a03e1f10901fc102cb1fc67acb41e36b032503ed9f20404e9fa67607_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_translations_row"));

        // line 182
        echo "<h4 class=\"ui dividing header\">";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 182, $this->getSourceContext()); })()), 'label');
        echo "</h4>
    <div class=\"ui grid\">
        ";
        // line 184
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 184, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["translation"]) {
            // line 185
            echo "            <div class=\"four wide column\">
                ";
            // line 186
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["translation"], 'label', (twig_test_empty($_label_ = call_user_func_array($this->env->getFilter('sylius_locale_name')->getCallable(), array(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["translation"], "vars", array()), "name", array())))) ? array() : array("label" => $_label_)));
            echo "
            </div>
            <div class=\"twelve wide column\">
                ";
            // line 189
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["translation"], 'widget');
            echo "
            </div>";
            // line 191
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 191, $this->getSourceContext()); })()), 'errors');
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 193
        echo "    </div>";
        
        $__internal_477f0ff9a03e1f10901fc102cb1fc67acb41e36b032503ed9f20404e9fa67607->leave($__internal_477f0ff9a03e1f10901fc102cb1fc67acb41e36b032503ed9f20404e9fa67607_prof);

        
        $__internal_47a815ea68d97ca8ecaab18c24784f635a97f091de5ae6623188ad76b8332b70->leave($__internal_47a815ea68d97ca8ecaab18c24784f635a97f091de5ae6623188ad76b8332b70_prof);

    }

    // line 196
    public function block_sylius_resource_autocomplete_choice_row($context, array $blocks = array())
    {
        $__internal_90411f15a26eb15df69dfd648020d8e86b2af154ed91b021827bcb5bf83476a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90411f15a26eb15df69dfd648020d8e86b2af154ed91b021827bcb5bf83476a0->enter($__internal_90411f15a26eb15df69dfd648020d8e86b2af154ed91b021827bcb5bf83476a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_resource_autocomplete_choice_row"));

        $__internal_17a4e0dda515d69dedab8887dc0b13d5a31cacb9dabe9f1624413ea6bf290ebe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17a4e0dda515d69dedab8887dc0b13d5a31cacb9dabe9f1624413ea6bf290ebe->enter($__internal_17a4e0dda515d69dedab8887dc0b13d5a31cacb9dabe9f1624413ea6bf290ebe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_resource_autocomplete_choice_row"));

        // line 197
        echo "    <div class=\"";
        if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 197, $this->getSourceContext()); })())) {
            echo "required ";
        }
        echo "field";
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 197, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 197, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 197, $this->getSourceContext()); })()))) {
            echo " error";
        }
        echo "\">";
        // line 198
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 198, $this->getSourceContext()); })()), 'label');
        // line 199
        echo "<div
            class=\"sylius-autocomplete ui fluid search selection dropdown ";
        // line 200
        if ((isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new Twig_Error_Runtime('Variable "multiple" does not exist.', 200, $this->getSourceContext()); })())) {
            echo "multiple";
        }
        echo "\"
            data-url=\"";
        // line 201
        echo twig_escape_filter($this->env, (isset($context["remote_url"]) || array_key_exists("remote_url", $context) ? $context["remote_url"] : (function () { throw new Twig_Error_Runtime('Variable "remote_url" does not exist.', 201, $this->getSourceContext()); })()), "html", null, true);
        echo "\"
            data-choice-name=\"";
        // line 202
        echo twig_escape_filter($this->env, (isset($context["choice_name"]) || array_key_exists("choice_name", $context) ? $context["choice_name"] : (function () { throw new Twig_Error_Runtime('Variable "choice_name" does not exist.', 202, $this->getSourceContext()); })()), "html", null, true);
        echo "\"
            data-choice-value=\"";
        // line 203
        echo twig_escape_filter($this->env, (isset($context["choice_value"]) || array_key_exists("choice_value", $context) ? $context["choice_value"] : (function () { throw new Twig_Error_Runtime('Variable "choice_value" does not exist.', 203, $this->getSourceContext()); })()), "html", null, true);
        echo "\"
            data-criteria-type=\"";
        // line 204
        echo twig_escape_filter($this->env, (isset($context["remote_criteria_type"]) || array_key_exists("remote_criteria_type", $context) ? $context["remote_criteria_type"] : (function () { throw new Twig_Error_Runtime('Variable "remote_criteria_type" does not exist.', 204, $this->getSourceContext()); })()), "html", null, true);
        echo "\"
            data-criteria-name=\"";
        // line 205
        echo twig_escape_filter($this->env, (isset($context["remote_criteria_name"]) || array_key_exists("remote_criteria_name", $context) ? $context["remote_criteria_name"] : (function () { throw new Twig_Error_Runtime('Variable "remote_criteria_name" does not exist.', 205, $this->getSourceContext()); })()), "html", null, true);
        echo "\"
            data-load-edit-url=\"";
        // line 206
        echo twig_escape_filter($this->env, (isset($context["load_edit_url"]) || array_key_exists("load_edit_url", $context) ? $context["load_edit_url"] : (function () { throw new Twig_Error_Runtime('Variable "load_edit_url" does not exist.', 206, $this->getSourceContext()); })()), "html", null, true);
        echo "\"
        >";
        // line 208
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 208, $this->getSourceContext()); })()), 'widget', array("attr" => array("class" => "autocomplete")));
        // line 209
        echo "<i class=\"dropdown icon\"></i>
            <div class=\"default text\">";
        // line 210
        if (array_key_exists("placeholder", $context)) {
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 210, $this->getSourceContext()); })())), "html", null, true);
            echo " ";
        }
        echo "</div>
            <div class=\"menu\"></div>
        </div>";
        // line 213
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 213, $this->getSourceContext()); })()), 'errors');
        // line 214
        echo "</div>
";
        
        $__internal_17a4e0dda515d69dedab8887dc0b13d5a31cacb9dabe9f1624413ea6bf290ebe->leave($__internal_17a4e0dda515d69dedab8887dc0b13d5a31cacb9dabe9f1624413ea6bf290ebe_prof);

        
        $__internal_90411f15a26eb15df69dfd648020d8e86b2af154ed91b021827bcb5bf83476a0->leave($__internal_90411f15a26eb15df69dfd648020d8e86b2af154ed91b021827bcb5bf83476a0_prof);

    }

    // line 217
    public function block_sylius_product_variant_generation_widget($context, array $blocks = array())
    {
        $__internal_411a89c6b0151909bb1eab5ea175b18d4ea67cfbc86ce2268f1d2cbd8b8858f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_411a89c6b0151909bb1eab5ea175b18d4ea67cfbc86ce2268f1d2cbd8b8858f0->enter($__internal_411a89c6b0151909bb1eab5ea175b18d4ea67cfbc86ce2268f1d2cbd8b8858f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_product_variant_generation_widget"));

        $__internal_e0e0d3ae169fa04f733a60f83215d5a87de27aa4db04f4213ea2be0d496f5a18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0e0d3ae169fa04f733a60f83215d5a87de27aa4db04f4213ea2be0d496f5a18->enter($__internal_e0e0d3ae169fa04f733a60f83215d5a87de27aa4db04f4213ea2be0d496f5a18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_product_variant_generation_widget"));

        // line 218
        echo "    <div class=\"ui segment\">
        <div class=\"ui two column stackable grid\">
            <div class=\"column\">
                ";
        // line 221
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 221, $this->getSourceContext()); })()), "optionValues", array()), 'row', array("label" => false));
        echo "
            </div>
            <div class=\"column\">
                ";
        // line 224
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 224, $this->getSourceContext()); })()), "code", array()), 'row');
        echo "
                ";
        // line 225
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 225, $this->getSourceContext()); })()), "name", array()), 'row');
        echo "
            </div>
        </div>
        <h4 class=\"ui dividing header\">";
        // line 228
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.pricing"), "html", null, true);
        echo "</h4>
        ";
        // line 229
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 229, $this->getSourceContext()); })()), "channelPricings", array()), 'row', array("label" => false));
        echo "
    </div>
";
        
        $__internal_e0e0d3ae169fa04f733a60f83215d5a87de27aa4db04f4213ea2be0d496f5a18->leave($__internal_e0e0d3ae169fa04f733a60f83215d5a87de27aa4db04f4213ea2be0d496f5a18_prof);

        
        $__internal_411a89c6b0151909bb1eab5ea175b18d4ea67cfbc86ce2268f1d2cbd8b8858f0->leave($__internal_411a89c6b0151909bb1eab5ea175b18d4ea67cfbc86ce2268f1d2cbd8b8858f0_prof);

    }

    // line 114
    public function macro_collection_item($__form__ = null, $__allow_delete__ = null, $__button_delete_label__ = null, $__index__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "form" => $__form__,
            "allow_delete" => $__allow_delete__,
            "button_delete_label" => $__button_delete_label__,
            "index" => $__index__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_f1b1faad591a6dd207f2ac276275c628f322ca17b764f251d0f88a1c17e97d9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_f1b1faad591a6dd207f2ac276275c628f322ca17b764f251d0f88a1c17e97d9d->enter($__internal_f1b1faad591a6dd207f2ac276275c628f322ca17b764f251d0f88a1c17e97d9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "collection_item"));

            $__internal_917570ef62c07abe23e8812557335193a3deef70a7b19f4a8c0d487ad6a13110 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_917570ef62c07abe23e8812557335193a3deef70a7b19f4a8c0d487ad6a13110->enter($__internal_917570ef62c07abe23e8812557335193a3deef70a7b19f4a8c0d487ad6a13110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "collection_item"));

            // line 115
            echo "    ";
            ob_start();
            // line 116
            echo "        <div data-form-collection=\"item\" data-form-collection-index=\"";
            echo twig_escape_filter($this->env, (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new Twig_Error_Runtime('Variable "index" does not exist.', 116, $this->getSourceContext()); })()), "html", null, true);
            echo "\">
            ";
            // line 117
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 117, $this->getSourceContext()); })()), 'widget');
            echo "
            ";
            // line 118
            if ((isset($context["allow_delete"]) || array_key_exists("allow_delete", $context) ? $context["allow_delete"] : (function () { throw new Twig_Error_Runtime('Variable "allow_delete" does not exist.', 118, $this->getSourceContext()); })())) {
                // line 119
                echo "                <a href=\"#\" data-form-collection=\"delete\" class=\"ui red labeled icon button\" style=\"margin-bottom: 1em;\">
                    <i class=\"trash icon\"></i>
                    ";
                // line 121
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["button_delete_label"]) || array_key_exists("button_delete_label", $context) ? $context["button_delete_label"] : (function () { throw new Twig_Error_Runtime('Variable "button_delete_label" does not exist.', 121, $this->getSourceContext()); })())), "html", null, true);
                echo "
                </a>
            ";
            }
            // line 124
            echo "        </div>
    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            
            $__internal_917570ef62c07abe23e8812557335193a3deef70a7b19f4a8c0d487ad6a13110->leave($__internal_917570ef62c07abe23e8812557335193a3deef70a7b19f4a8c0d487ad6a13110_prof);

            
            $__internal_f1b1faad591a6dd207f2ac276275c628f322ca17b764f251d0f88a1c17e97d9d->leave($__internal_f1b1faad591a6dd207f2ac276275c628f322ca17b764f251d0f88a1c17e97d9d_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@SyliusUi/Form/theme.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  903 => 124,  897 => 121,  893 => 119,  891 => 118,  887 => 117,  882 => 116,  879 => 115,  858 => 114,  845 => 229,  841 => 228,  835 => 225,  831 => 224,  825 => 221,  820 => 218,  811 => 217,  800 => 214,  798 => 213,  789 => 210,  786 => 209,  784 => 208,  780 => 206,  776 => 205,  772 => 204,  768 => 203,  764 => 202,  760 => 201,  754 => 200,  751 => 199,  749 => 198,  739 => 197,  730 => 196,  720 => 193,  714 => 191,  710 => 189,  704 => 186,  701 => 185,  697 => 184,  691 => 182,  682 => 181,  670 => 177,  656 => 176,  651 => 173,  649 => 172,  644 => 171,  627 => 170,  622 => 168,  619 => 167,  610 => 166,  599 => 163,  590 => 161,  586 => 160,  583 => 159,  574 => 158,  561 => 154,  558 => 153,  549 => 152,  536 => 148,  533 => 147,  524 => 146,  510 => 141,  506 => 139,  497 => 138,  483 => 133,  479 => 132,  475 => 131,  471 => 129,  462 => 128,  450 => 110,  444 => 107,  440 => 105,  438 => 104,  434 => 102,  417 => 100,  400 => 99,  396 => 97,  393 => 96,  382 => 94,  377 => 93,  375 => 92,  370 => 90,  367 => 89,  362 => 87,  360 => 86,  355 => 85,  353 => 84,  350 => 83,  347 => 82,  344 => 81,  342 => 80,  333 => 79,  322 => 75,  320 => 74,  318 => 73,  309 => 72,  298 => 68,  290 => 65,  288 => 64,  286 => 63,  283 => 61,  279 => 60,  274 => 58,  265 => 57,  255 => 54,  253 => 53,  251 => 52,  249 => 51,  247 => 50,  237 => 49,  228 => 48,  218 => 45,  216 => 44,  213 => 43,  210 => 42,  201 => 41,  190 => 37,  188 => 36,  186 => 35,  184 => 34,  177 => 32,  168 => 31,  157 => 27,  155 => 26,  153 => 25,  151 => 24,  144 => 22,  135 => 21,  118 => 15,  107 => 14,  103 => 13,  101 => 12,  92 => 11,  82 => 8,  80 => 7,  78 => 6,  76 => 5,  66 => 4,  57 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'form_div_layout.html.twig' %}

{% block form_row -%}
    <div class=\"{% if required %}required {% endif %}field{% if (not compound or force_error|default(false)) and not valid %} error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{%- block form_errors -%}
    {%- if errors|length > 0 -%}
        {%- for error in errors -%}
            <div class=\"ui red {% if form.parent is not empty %}pointing {% endif %}label sylius-validation-error\"{% if form.parent is empty %} style=\"margin-bottom: 10px;\"{% endif %}>
                {{ error.message }}
            </div>
        {%- endfor -%}
    {%- endif -%}
{%- endblock form_errors -%}

{% block checkbox_row -%}
    <div class=\"field{% if (not compound or force_error|default(false)) and not valid %} error{% endif %}\">
        <div class=\"ui toggle checkbox\">
            {{- form_widget(form) -}}
            {{- form_label(form) -}}
            {{- form_errors(form) -}}
        </div>
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"field{% if (not compound or force_error|default(false)) and not valid %} error{% endif %}\">
        <div class=\"ui radio checkbox\">
            {{- form_label(form) -}}
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>
    </div>
{%- endblock radio_row %}

{% block money_widget -%}
    <div class=\"ui labeled input\">
        <div class=\"ui label\">{{ currency|sylius_currency_symbol }}</div>
        {{- form_widget(form) -}}
    </div>
{%- endblock money_widget %}

{% block choice_row -%}
    <div class=\"{% if required %}required {% endif %}field{% if (not compound or force_error|default(false)) and not valid %} error{% endif %}\">
        {{- form_label(form) -}}
        {% set attr = attr|merge({'class': attr.class|default ~ ' ui dropdown'}) %}
        {{- form_widget(form, {'attr': attr}) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock choice_row %}

{%- block choice_widget_expanded -%}
    <div {{ block('widget_container_attributes') }}>
        <div class=\"grouped fields\">
            {%- for child in form %}
                <div class=\"field\">
                    <div class=\"ui toggle checkbox\">
                        {{- form_label(child, null, {translation_domain: choice_translation_domain}) -}}
                        {{- form_widget(child) -}}
                    </div>
                </div>
            {% endfor -%}
        </div>
    </div>
{%- endblock choice_widget_expanded -%}

{% block percent_widget -%}
    <div class=\"ui right labeled input\">
        {{- form_widget(form) -}}
        <div class=\"ui basic label\">%</div>
    </div>
{%- endblock percent_widget %}

{% block collection_widget -%}
    {% from 'SyliusResourceBundle:Macros:notification.html.twig' import error %}
    {% import _self as self %}
    {% set attr = attr|merge({'class': attr.class|default ~ ' controls collection-widget'}) %}

    {% spaceless %}
        <div data-form-type=\"collection\" {{ block('widget_container_attributes') }}
            {% if prototype is defined and allow_add %}
                data-prototype='{{ self.collection_item(prototype, allow_delete, button_delete_label, '__name__')|e }}'
            {%- endif -%}
        >
            {{ error(form.vars.errors) }}

            {% if prototypes|default is iterable %}
                {% for key, subPrototype in prototypes %}
                    <input type=\"hidden\" data-form-prototype=\"{{ key }}\" value=\"{{ self.collection_item(subPrototype, allow_delete, button_delete_label, '__name__')|e }}\" />
                {% endfor %}
            {% endif %}

            <div data-form-collection=\"list\">
                {% for child in form %}
                    {{ self.collection_item(child, allow_delete, button_delete_label, loop.index0) }}
                {% endfor %}
            </div>

            {% if prototype is defined and allow_add %}
                <a href=\"#\" class=\"ui labeled icon button\" data-form-collection=\"add\">
                    <i class=\"plus square outline icon\"></i>
                    {{ button_add_label|trans }}
                </a>
            {% endif %}
        </div>
    {% endspaceless %}
{%- endblock collection_widget %}

{% macro collection_item(form, allow_delete, button_delete_label, index) %}
    {% spaceless %}
        <div data-form-collection=\"item\" data-form-collection-index=\"{{ index }}\">
            {{ form_widget(form) }}
            {% if allow_delete %}
                <a href=\"#\" data-form-collection=\"delete\" class=\"ui red labeled icon button\" style=\"margin-bottom: 1em;\">
                    <i class=\"trash icon\"></i>
                    {{ button_delete_label|trans }}
                </a>
            {% endif %}
        </div>
    {% endspaceless %}
{% endmacro %}

{% block sylius_province_widget %}
<div class=\"ui compact segment\">
    <div class=\"inline fields\">
        {{ form_row(form.code) }}
        {{ form_row(form.name) }}
        {{ form_row(form.abbreviation) }}
    </div>
</div>
{% endblock %}

{% block sylius_zone_member_widget %}
    <div class=\"ui compact segment\">
        <div class=\"inline fields\">
            {{ form_row(form.code) }}
        </div>
    </div>
{% endblock %}

{% block sylius_promotion_rule_widget %}
    <div class=\"ui segment\">
        {{ form_widget(form) }}
    </div>
{% endblock %}

{% block sylius_promotion_action_widget %}
    <div class=\"ui segment\">
        {{ form_widget(form) }}
    </div>
{% endblock %}

{% block sylius_promotion_configuration_widget %}
    <div class=\"configuration\">
        {% for child in form %}
            <hr/>{{ form_row(child) }}<hr/>
        {% endfor %}
    </div>
{% endblock %}

{% block sylius_product_option_value_widget %}
    <div class=\"ui segment\">
        {{ form_row(form.code) }}
            <div class=\"five fields\">
            {% for locale, translationForm in form.translations %}
                {{ form_row(translationForm.value, {'label': locale|sylius_locale_name}) }}
                {% if 0 == loop.index % 5 %}
                </div>
                <div class=\"five fields\">
                {% endif %}
            {% endfor %}
            </div>
    </div>
{% endblock %}

{% block sylius_translations_row -%}
    <h4 class=\"ui dividing header\">{{ form_label(form) }}</h4>
    <div class=\"ui grid\">
        {% for translation in form %}
            <div class=\"four wide column\">
                {{ form_label(translation, translation.vars.name|sylius_locale_name) }}
            </div>
            <div class=\"twelve wide column\">
                {{ form_widget(translation) }}
            </div>
            {{- form_errors(form) -}}
        {% endfor %}
    </div>
{%- endblock sylius_translations_row %}

{% block sylius_resource_autocomplete_choice_row %}
    <div class=\"{% if required %}required {% endif %}field{% if (not compound or force_error|default(false)) and not valid %} error{% endif %}\">
        {{- form_label(form) -}}
        <div
            class=\"sylius-autocomplete ui fluid search selection dropdown {% if multiple %}multiple{% endif %}\"
            data-url=\"{{ remote_url }}\"
            data-choice-name=\"{{ choice_name }}\"
            data-choice-value=\"{{ choice_value }}\"
            data-criteria-type=\"{{ remote_criteria_type }}\"
            data-criteria-name=\"{{ remote_criteria_name }}\"
            data-load-edit-url=\"{{ load_edit_url }}\"
        >
            {{- form_widget(form, {'attr': {'class' : 'autocomplete'}}) -}}
            <i class=\"dropdown icon\"></i>
            <div class=\"default text\">{% if placeholder is defined %} {{ placeholder|trans }} {% endif %}</div>
            <div class=\"menu\"></div>
        </div>
        {{- form_errors(form) -}}
    </div>
{% endblock %}

{% block sylius_product_variant_generation_widget %}
    <div class=\"ui segment\">
        <div class=\"ui two column stackable grid\">
            <div class=\"column\">
                {{ form_row(form.optionValues, {'label': false}) }}
            </div>
            <div class=\"column\">
                {{ form_row(form.code) }}
                {{ form_row(form.name) }}
            </div>
        </div>
        <h4 class=\"ui dividing header\">{{ 'sylius.ui.pricing'|trans }}</h4>
        {{ form_row(form.channelPricings, {'label': false}) }}
    </div>
{% endblock %}
", "@SyliusUi/Form/theme.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle\\Resources\\views\\Form\\theme.html.twig");
    }
}
