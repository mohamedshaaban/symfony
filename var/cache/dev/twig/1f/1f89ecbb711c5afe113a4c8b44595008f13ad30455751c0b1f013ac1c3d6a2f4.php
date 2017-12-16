<?php

/* @SyliusUi/Form/theme.html.twig */
class __TwigTemplate_6064a302d9843db813570250fed16f8548fd81417d11cc1230d98cef8ac2ae4e extends Twig_Template
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
        $__internal_9631ac2470862fc05ada34c946b7a58a52c291c3ba0239066283dda8727a5994 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9631ac2470862fc05ada34c946b7a58a52c291c3ba0239066283dda8727a5994->enter($__internal_9631ac2470862fc05ada34c946b7a58a52c291c3ba0239066283dda8727a5994_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusUi/Form/theme.html.twig"));

        $__internal_6a48db3b8597517ec9c743fcf1f787e218061a4e8a1d23204499254b0f5f2807 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a48db3b8597517ec9c743fcf1f787e218061a4e8a1d23204499254b0f5f2807->enter($__internal_6a48db3b8597517ec9c743fcf1f787e218061a4e8a1d23204499254b0f5f2807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusUi/Form/theme.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9631ac2470862fc05ada34c946b7a58a52c291c3ba0239066283dda8727a5994->leave($__internal_9631ac2470862fc05ada34c946b7a58a52c291c3ba0239066283dda8727a5994_prof);

        
        $__internal_6a48db3b8597517ec9c743fcf1f787e218061a4e8a1d23204499254b0f5f2807->leave($__internal_6a48db3b8597517ec9c743fcf1f787e218061a4e8a1d23204499254b0f5f2807_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_a160102bcb3ddbd7a1cb7d703c7097fe70a73c77f4543cd545ed63f9f816e629 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a160102bcb3ddbd7a1cb7d703c7097fe70a73c77f4543cd545ed63f9f816e629->enter($__internal_a160102bcb3ddbd7a1cb7d703c7097fe70a73c77f4543cd545ed63f9f816e629_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_70050b712060341331fc94a69bf0c44b31cfb520d8a77df76a0491b05d23927c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70050b712060341331fc94a69bf0c44b31cfb520d8a77df76a0491b05d23927c->enter($__internal_70050b712060341331fc94a69bf0c44b31cfb520d8a77df76a0491b05d23927c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_70050b712060341331fc94a69bf0c44b31cfb520d8a77df76a0491b05d23927c->leave($__internal_70050b712060341331fc94a69bf0c44b31cfb520d8a77df76a0491b05d23927c_prof);

        
        $__internal_a160102bcb3ddbd7a1cb7d703c7097fe70a73c77f4543cd545ed63f9f816e629->leave($__internal_a160102bcb3ddbd7a1cb7d703c7097fe70a73c77f4543cd545ed63f9f816e629_prof);

    }

    // line 11
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_8315ebdb5187b8cafc3d7916c452ce2501427ca6349636b48d4b406e95f6d77e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8315ebdb5187b8cafc3d7916c452ce2501427ca6349636b48d4b406e95f6d77e->enter($__internal_8315ebdb5187b8cafc3d7916c452ce2501427ca6349636b48d4b406e95f6d77e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_937fa4ef277c2ec6e4de5bf4f0e6a906d2c1292779c55b80766a34b22243c347 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_937fa4ef277c2ec6e4de5bf4f0e6a906d2c1292779c55b80766a34b22243c347->enter($__internal_937fa4ef277c2ec6e4de5bf4f0e6a906d2c1292779c55b80766a34b22243c347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_937fa4ef277c2ec6e4de5bf4f0e6a906d2c1292779c55b80766a34b22243c347->leave($__internal_937fa4ef277c2ec6e4de5bf4f0e6a906d2c1292779c55b80766a34b22243c347_prof);

        
        $__internal_8315ebdb5187b8cafc3d7916c452ce2501427ca6349636b48d4b406e95f6d77e->leave($__internal_8315ebdb5187b8cafc3d7916c452ce2501427ca6349636b48d4b406e95f6d77e_prof);

    }

    // line 21
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_d5e7054181eed818a3d0f17a5f032baf4238cc625398198fedb1f3ac2ff1043d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5e7054181eed818a3d0f17a5f032baf4238cc625398198fedb1f3ac2ff1043d->enter($__internal_d5e7054181eed818a3d0f17a5f032baf4238cc625398198fedb1f3ac2ff1043d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_a988bc932e1fa111bea17616f4ddea3c97d85e974ffd89c0628ff1eb4d38704d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a988bc932e1fa111bea17616f4ddea3c97d85e974ffd89c0628ff1eb4d38704d->enter($__internal_a988bc932e1fa111bea17616f4ddea3c97d85e974ffd89c0628ff1eb4d38704d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_a988bc932e1fa111bea17616f4ddea3c97d85e974ffd89c0628ff1eb4d38704d->leave($__internal_a988bc932e1fa111bea17616f4ddea3c97d85e974ffd89c0628ff1eb4d38704d_prof);

        
        $__internal_d5e7054181eed818a3d0f17a5f032baf4238cc625398198fedb1f3ac2ff1043d->leave($__internal_d5e7054181eed818a3d0f17a5f032baf4238cc625398198fedb1f3ac2ff1043d_prof);

    }

    // line 31
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_e84719b986e9897202e607c9f6adfa9d4f8525cd5064fba916ccc83503d12278 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e84719b986e9897202e607c9f6adfa9d4f8525cd5064fba916ccc83503d12278->enter($__internal_e84719b986e9897202e607c9f6adfa9d4f8525cd5064fba916ccc83503d12278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_be3abdb932a0e729ac7192c4891eec56826085892efdee2e61dc8ded058206d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be3abdb932a0e729ac7192c4891eec56826085892efdee2e61dc8ded058206d4->enter($__internal_be3abdb932a0e729ac7192c4891eec56826085892efdee2e61dc8ded058206d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

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
        
        $__internal_be3abdb932a0e729ac7192c4891eec56826085892efdee2e61dc8ded058206d4->leave($__internal_be3abdb932a0e729ac7192c4891eec56826085892efdee2e61dc8ded058206d4_prof);

        
        $__internal_e84719b986e9897202e607c9f6adfa9d4f8525cd5064fba916ccc83503d12278->leave($__internal_e84719b986e9897202e607c9f6adfa9d4f8525cd5064fba916ccc83503d12278_prof);

    }

    // line 41
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_229be58c94e3e4ea4b8f45562f20dd1c9e41b05d91b6d4cfb1d8028a4de644ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_229be58c94e3e4ea4b8f45562f20dd1c9e41b05d91b6d4cfb1d8028a4de644ce->enter($__internal_229be58c94e3e4ea4b8f45562f20dd1c9e41b05d91b6d4cfb1d8028a4de644ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_c1a24f8b37fb51f157b3bda865d7e93854ade87715b866094e9d9733b081a466 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1a24f8b37fb51f157b3bda865d7e93854ade87715b866094e9d9733b081a466->enter($__internal_c1a24f8b37fb51f157b3bda865d7e93854ade87715b866094e9d9733b081a466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

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
        
        $__internal_c1a24f8b37fb51f157b3bda865d7e93854ade87715b866094e9d9733b081a466->leave($__internal_c1a24f8b37fb51f157b3bda865d7e93854ade87715b866094e9d9733b081a466_prof);

        
        $__internal_229be58c94e3e4ea4b8f45562f20dd1c9e41b05d91b6d4cfb1d8028a4de644ce->leave($__internal_229be58c94e3e4ea4b8f45562f20dd1c9e41b05d91b6d4cfb1d8028a4de644ce_prof);

    }

    // line 48
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_749810b07ea367441946a56dd214aa054f4254fcabe461a6a149c1686d51937a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_749810b07ea367441946a56dd214aa054f4254fcabe461a6a149c1686d51937a->enter($__internal_749810b07ea367441946a56dd214aa054f4254fcabe461a6a149c1686d51937a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_44dd93a2bcd6635e0d740f692f6312dc76ad51a1d60043524c3ddb061360980c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44dd93a2bcd6635e0d740f692f6312dc76ad51a1d60043524c3ddb061360980c->enter($__internal_44dd93a2bcd6635e0d740f692f6312dc76ad51a1d60043524c3ddb061360980c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

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
        
        $__internal_44dd93a2bcd6635e0d740f692f6312dc76ad51a1d60043524c3ddb061360980c->leave($__internal_44dd93a2bcd6635e0d740f692f6312dc76ad51a1d60043524c3ddb061360980c_prof);

        
        $__internal_749810b07ea367441946a56dd214aa054f4254fcabe461a6a149c1686d51937a->leave($__internal_749810b07ea367441946a56dd214aa054f4254fcabe461a6a149c1686d51937a_prof);

    }

    // line 57
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_55c89df97d415af7e7fdffa46aab5076c4c81a666b5f394a850fc901aa78721a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55c89df97d415af7e7fdffa46aab5076c4c81a666b5f394a850fc901aa78721a->enter($__internal_55c89df97d415af7e7fdffa46aab5076c4c81a666b5f394a850fc901aa78721a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_4079ccfd266076f1c2eaa35b7ec20e03527fd0e544f4d9368fe6f2b836d3bff9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4079ccfd266076f1c2eaa35b7ec20e03527fd0e544f4d9368fe6f2b836d3bff9->enter($__internal_4079ccfd266076f1c2eaa35b7ec20e03527fd0e544f4d9368fe6f2b836d3bff9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

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
        
        $__internal_4079ccfd266076f1c2eaa35b7ec20e03527fd0e544f4d9368fe6f2b836d3bff9->leave($__internal_4079ccfd266076f1c2eaa35b7ec20e03527fd0e544f4d9368fe6f2b836d3bff9_prof);

        
        $__internal_55c89df97d415af7e7fdffa46aab5076c4c81a666b5f394a850fc901aa78721a->leave($__internal_55c89df97d415af7e7fdffa46aab5076c4c81a666b5f394a850fc901aa78721a_prof);

    }

    // line 72
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_10dfc6af5acb6405e4044605275694fc2417268da596d95535256d1c821e8ae8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10dfc6af5acb6405e4044605275694fc2417268da596d95535256d1c821e8ae8->enter($__internal_10dfc6af5acb6405e4044605275694fc2417268da596d95535256d1c821e8ae8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_59b3fff5680422b9abb1645089899a54bbf098f508afd5bbbe234c720219523f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59b3fff5680422b9abb1645089899a54bbf098f508afd5bbbe234c720219523f->enter($__internal_59b3fff5680422b9abb1645089899a54bbf098f508afd5bbbe234c720219523f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 73
        echo "<div class=\"ui right labeled input\">";
        // line 74
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 74, $this->getSourceContext()); })()), 'widget');
        // line 75
        echo "<div class=\"ui basic label\">%</div>
    </div>";
        
        $__internal_59b3fff5680422b9abb1645089899a54bbf098f508afd5bbbe234c720219523f->leave($__internal_59b3fff5680422b9abb1645089899a54bbf098f508afd5bbbe234c720219523f_prof);

        
        $__internal_10dfc6af5acb6405e4044605275694fc2417268da596d95535256d1c821e8ae8->leave($__internal_10dfc6af5acb6405e4044605275694fc2417268da596d95535256d1c821e8ae8_prof);

    }

    // line 79
    public function block_collection_widget($context, array $blocks = array())
    {
        $__internal_c9625228c168638c94986a6ec5766a088b6aff22449cf39816831fa9d9404c9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9625228c168638c94986a6ec5766a088b6aff22449cf39816831fa9d9404c9f->enter($__internal_c9625228c168638c94986a6ec5766a088b6aff22449cf39816831fa9d9404c9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        $__internal_02a52d0f193179865bb4f5ce2983b0e20ed7d5dc5dc7cc70998e3193a121f190 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02a52d0f193179865bb4f5ce2983b0e20ed7d5dc5dc7cc70998e3193a121f190->enter($__internal_02a52d0f193179865bb4f5ce2983b0e20ed7d5dc5dc7cc70998e3193a121f190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        // line 80
        $context["__internal_e92564eda2337cf901c15553f556d3aea8d725e89152b71a6a8b9b89a3dc0660"] = $this->loadTemplate("SyliusResourceBundle:Macros:notification.html.twig", "@SyliusUi/Form/theme.html.twig", 80);
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
        echo $context["__internal_e92564eda2337cf901c15553f556d3aea8d725e89152b71a6a8b9b89a3dc0660"]->macro_error(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 90, $this->getSourceContext()); })()), "vars", array()), "errors", array()));
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
        
        $__internal_02a52d0f193179865bb4f5ce2983b0e20ed7d5dc5dc7cc70998e3193a121f190->leave($__internal_02a52d0f193179865bb4f5ce2983b0e20ed7d5dc5dc7cc70998e3193a121f190_prof);

        
        $__internal_c9625228c168638c94986a6ec5766a088b6aff22449cf39816831fa9d9404c9f->leave($__internal_c9625228c168638c94986a6ec5766a088b6aff22449cf39816831fa9d9404c9f_prof);

    }

    // line 128
    public function block_sylius_province_widget($context, array $blocks = array())
    {
        $__internal_90bdddc1648a78d3a410c29ba9fdf2804647d276fe0072ba1abcea41cb2132c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90bdddc1648a78d3a410c29ba9fdf2804647d276fe0072ba1abcea41cb2132c4->enter($__internal_90bdddc1648a78d3a410c29ba9fdf2804647d276fe0072ba1abcea41cb2132c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_province_widget"));

        $__internal_4656c049ff893d5c3012c7b8f6d730cd696e7e7fed401f92083656413b86c6dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4656c049ff893d5c3012c7b8f6d730cd696e7e7fed401f92083656413b86c6dc->enter($__internal_4656c049ff893d5c3012c7b8f6d730cd696e7e7fed401f92083656413b86c6dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_province_widget"));

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
        
        $__internal_4656c049ff893d5c3012c7b8f6d730cd696e7e7fed401f92083656413b86c6dc->leave($__internal_4656c049ff893d5c3012c7b8f6d730cd696e7e7fed401f92083656413b86c6dc_prof);

        
        $__internal_90bdddc1648a78d3a410c29ba9fdf2804647d276fe0072ba1abcea41cb2132c4->leave($__internal_90bdddc1648a78d3a410c29ba9fdf2804647d276fe0072ba1abcea41cb2132c4_prof);

    }

    // line 138
    public function block_sylius_zone_member_widget($context, array $blocks = array())
    {
        $__internal_bd6d2cee8a21eda003cb8c838bdfb4b7d84a5c24895764aafa2bfc1dc9f2d5fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd6d2cee8a21eda003cb8c838bdfb4b7d84a5c24895764aafa2bfc1dc9f2d5fa->enter($__internal_bd6d2cee8a21eda003cb8c838bdfb4b7d84a5c24895764aafa2bfc1dc9f2d5fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_zone_member_widget"));

        $__internal_1905f07b90e60115d2fc608cb51e04a0fed3ffad95993158cf441b91b44bb0aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1905f07b90e60115d2fc608cb51e04a0fed3ffad95993158cf441b91b44bb0aa->enter($__internal_1905f07b90e60115d2fc608cb51e04a0fed3ffad95993158cf441b91b44bb0aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_zone_member_widget"));

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
        
        $__internal_1905f07b90e60115d2fc608cb51e04a0fed3ffad95993158cf441b91b44bb0aa->leave($__internal_1905f07b90e60115d2fc608cb51e04a0fed3ffad95993158cf441b91b44bb0aa_prof);

        
        $__internal_bd6d2cee8a21eda003cb8c838bdfb4b7d84a5c24895764aafa2bfc1dc9f2d5fa->leave($__internal_bd6d2cee8a21eda003cb8c838bdfb4b7d84a5c24895764aafa2bfc1dc9f2d5fa_prof);

    }

    // line 146
    public function block_sylius_promotion_rule_widget($context, array $blocks = array())
    {
        $__internal_99d7dd48177ae30aa0dc0a4d1bb3d55dd7c82444f2a54d8123b0555190396550 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99d7dd48177ae30aa0dc0a4d1bb3d55dd7c82444f2a54d8123b0555190396550->enter($__internal_99d7dd48177ae30aa0dc0a4d1bb3d55dd7c82444f2a54d8123b0555190396550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_promotion_rule_widget"));

        $__internal_96e15eca13e691741122eacd67592e86dceac231cf04fd61589ebc6bc6070f9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96e15eca13e691741122eacd67592e86dceac231cf04fd61589ebc6bc6070f9f->enter($__internal_96e15eca13e691741122eacd67592e86dceac231cf04fd61589ebc6bc6070f9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_promotion_rule_widget"));

        // line 147
        echo "    <div class=\"ui segment\">
        ";
        // line 148
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 148, $this->getSourceContext()); })()), 'widget');
        echo "
    </div>
";
        
        $__internal_96e15eca13e691741122eacd67592e86dceac231cf04fd61589ebc6bc6070f9f->leave($__internal_96e15eca13e691741122eacd67592e86dceac231cf04fd61589ebc6bc6070f9f_prof);

        
        $__internal_99d7dd48177ae30aa0dc0a4d1bb3d55dd7c82444f2a54d8123b0555190396550->leave($__internal_99d7dd48177ae30aa0dc0a4d1bb3d55dd7c82444f2a54d8123b0555190396550_prof);

    }

    // line 152
    public function block_sylius_promotion_action_widget($context, array $blocks = array())
    {
        $__internal_5d0e1fdcd04a944d40b6e9aa5428ed0f18e6a983252ae7d92e0b2e348b3dcdec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d0e1fdcd04a944d40b6e9aa5428ed0f18e6a983252ae7d92e0b2e348b3dcdec->enter($__internal_5d0e1fdcd04a944d40b6e9aa5428ed0f18e6a983252ae7d92e0b2e348b3dcdec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_promotion_action_widget"));

        $__internal_5d694ddd48fef5a9ac0e5eecb407a7fff67a2f3986e0a9aeb9ffaa3c0ac5859b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d694ddd48fef5a9ac0e5eecb407a7fff67a2f3986e0a9aeb9ffaa3c0ac5859b->enter($__internal_5d694ddd48fef5a9ac0e5eecb407a7fff67a2f3986e0a9aeb9ffaa3c0ac5859b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_promotion_action_widget"));

        // line 153
        echo "    <div class=\"ui segment\">
        ";
        // line 154
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 154, $this->getSourceContext()); })()), 'widget');
        echo "
    </div>
";
        
        $__internal_5d694ddd48fef5a9ac0e5eecb407a7fff67a2f3986e0a9aeb9ffaa3c0ac5859b->leave($__internal_5d694ddd48fef5a9ac0e5eecb407a7fff67a2f3986e0a9aeb9ffaa3c0ac5859b_prof);

        
        $__internal_5d0e1fdcd04a944d40b6e9aa5428ed0f18e6a983252ae7d92e0b2e348b3dcdec->leave($__internal_5d0e1fdcd04a944d40b6e9aa5428ed0f18e6a983252ae7d92e0b2e348b3dcdec_prof);

    }

    // line 158
    public function block_sylius_promotion_configuration_widget($context, array $blocks = array())
    {
        $__internal_d5670b979c049f35c9f59065a9b99f6a20c4a5771da3915893bc088e3a50565b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5670b979c049f35c9f59065a9b99f6a20c4a5771da3915893bc088e3a50565b->enter($__internal_d5670b979c049f35c9f59065a9b99f6a20c4a5771da3915893bc088e3a50565b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_promotion_configuration_widget"));

        $__internal_2d627b0bee19b8574b4b0adae4fa202843cc7abe56eeda32cd17b463cf867e33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d627b0bee19b8574b4b0adae4fa202843cc7abe56eeda32cd17b463cf867e33->enter($__internal_2d627b0bee19b8574b4b0adae4fa202843cc7abe56eeda32cd17b463cf867e33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_promotion_configuration_widget"));

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
        
        $__internal_2d627b0bee19b8574b4b0adae4fa202843cc7abe56eeda32cd17b463cf867e33->leave($__internal_2d627b0bee19b8574b4b0adae4fa202843cc7abe56eeda32cd17b463cf867e33_prof);

        
        $__internal_d5670b979c049f35c9f59065a9b99f6a20c4a5771da3915893bc088e3a50565b->leave($__internal_d5670b979c049f35c9f59065a9b99f6a20c4a5771da3915893bc088e3a50565b_prof);

    }

    // line 166
    public function block_sylius_product_option_value_widget($context, array $blocks = array())
    {
        $__internal_717f99ffaf725ab745248e6780371048793ffba5c7d0f96c8d040c8f5d48eb51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_717f99ffaf725ab745248e6780371048793ffba5c7d0f96c8d040c8f5d48eb51->enter($__internal_717f99ffaf725ab745248e6780371048793ffba5c7d0f96c8d040c8f5d48eb51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_product_option_value_widget"));

        $__internal_986e871e825c8d60f503191463439618d3a78d6216c00513a5ef166e97ad9e95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_986e871e825c8d60f503191463439618d3a78d6216c00513a5ef166e97ad9e95->enter($__internal_986e871e825c8d60f503191463439618d3a78d6216c00513a5ef166e97ad9e95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_product_option_value_widget"));

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
        
        $__internal_986e871e825c8d60f503191463439618d3a78d6216c00513a5ef166e97ad9e95->leave($__internal_986e871e825c8d60f503191463439618d3a78d6216c00513a5ef166e97ad9e95_prof);

        
        $__internal_717f99ffaf725ab745248e6780371048793ffba5c7d0f96c8d040c8f5d48eb51->leave($__internal_717f99ffaf725ab745248e6780371048793ffba5c7d0f96c8d040c8f5d48eb51_prof);

    }

    // line 181
    public function block_sylius_translations_row($context, array $blocks = array())
    {
        $__internal_7d82603fba81a801e3b6200475c97d3377872de336d783e549bfa9989a8a0272 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d82603fba81a801e3b6200475c97d3377872de336d783e549bfa9989a8a0272->enter($__internal_7d82603fba81a801e3b6200475c97d3377872de336d783e549bfa9989a8a0272_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_translations_row"));

        $__internal_9a4bffe223a0dc30535d9840e2d45de48ce7c80ccd691f9d3f733a23ead78563 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a4bffe223a0dc30535d9840e2d45de48ce7c80ccd691f9d3f733a23ead78563->enter($__internal_9a4bffe223a0dc30535d9840e2d45de48ce7c80ccd691f9d3f733a23ead78563_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_translations_row"));

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
        
        $__internal_9a4bffe223a0dc30535d9840e2d45de48ce7c80ccd691f9d3f733a23ead78563->leave($__internal_9a4bffe223a0dc30535d9840e2d45de48ce7c80ccd691f9d3f733a23ead78563_prof);

        
        $__internal_7d82603fba81a801e3b6200475c97d3377872de336d783e549bfa9989a8a0272->leave($__internal_7d82603fba81a801e3b6200475c97d3377872de336d783e549bfa9989a8a0272_prof);

    }

    // line 196
    public function block_sylius_resource_autocomplete_choice_row($context, array $blocks = array())
    {
        $__internal_8c4f0dccc4bc044df6ffa23c233b188b364f3123ad1993cd00f98935dbd13e58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c4f0dccc4bc044df6ffa23c233b188b364f3123ad1993cd00f98935dbd13e58->enter($__internal_8c4f0dccc4bc044df6ffa23c233b188b364f3123ad1993cd00f98935dbd13e58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_resource_autocomplete_choice_row"));

        $__internal_fbe78c0f312a5df6d2fa4b27217d0ddbd2b478ee4dbd179a581282ff04bc711f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbe78c0f312a5df6d2fa4b27217d0ddbd2b478ee4dbd179a581282ff04bc711f->enter($__internal_fbe78c0f312a5df6d2fa4b27217d0ddbd2b478ee4dbd179a581282ff04bc711f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_resource_autocomplete_choice_row"));

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
        
        $__internal_fbe78c0f312a5df6d2fa4b27217d0ddbd2b478ee4dbd179a581282ff04bc711f->leave($__internal_fbe78c0f312a5df6d2fa4b27217d0ddbd2b478ee4dbd179a581282ff04bc711f_prof);

        
        $__internal_8c4f0dccc4bc044df6ffa23c233b188b364f3123ad1993cd00f98935dbd13e58->leave($__internal_8c4f0dccc4bc044df6ffa23c233b188b364f3123ad1993cd00f98935dbd13e58_prof);

    }

    // line 217
    public function block_sylius_product_variant_generation_widget($context, array $blocks = array())
    {
        $__internal_a686498f14c5a9ad823101681e901162f47f464d199f9b5ad260c1b2c9cfeed3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a686498f14c5a9ad823101681e901162f47f464d199f9b5ad260c1b2c9cfeed3->enter($__internal_a686498f14c5a9ad823101681e901162f47f464d199f9b5ad260c1b2c9cfeed3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_product_variant_generation_widget"));

        $__internal_10a3a02d0ed4ffc8154f2d7cfd412916c0299d4d5895daf71268e5af6db092c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10a3a02d0ed4ffc8154f2d7cfd412916c0299d4d5895daf71268e5af6db092c8->enter($__internal_10a3a02d0ed4ffc8154f2d7cfd412916c0299d4d5895daf71268e5af6db092c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_product_variant_generation_widget"));

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
        
        $__internal_10a3a02d0ed4ffc8154f2d7cfd412916c0299d4d5895daf71268e5af6db092c8->leave($__internal_10a3a02d0ed4ffc8154f2d7cfd412916c0299d4d5895daf71268e5af6db092c8_prof);

        
        $__internal_a686498f14c5a9ad823101681e901162f47f464d199f9b5ad260c1b2c9cfeed3->leave($__internal_a686498f14c5a9ad823101681e901162f47f464d199f9b5ad260c1b2c9cfeed3_prof);

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
            $__internal_0036e4dad173c6133dd407f5521dd672a4a92095e294ad8499ada5cd3bf1b66d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_0036e4dad173c6133dd407f5521dd672a4a92095e294ad8499ada5cd3bf1b66d->enter($__internal_0036e4dad173c6133dd407f5521dd672a4a92095e294ad8499ada5cd3bf1b66d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "collection_item"));

            $__internal_567b021bd358698062f01ebfc472c94bcee88fbffc3c534a11ee015fcf88fbe3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_567b021bd358698062f01ebfc472c94bcee88fbffc3c534a11ee015fcf88fbe3->enter($__internal_567b021bd358698062f01ebfc472c94bcee88fbffc3c534a11ee015fcf88fbe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "collection_item"));

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
            
            $__internal_567b021bd358698062f01ebfc472c94bcee88fbffc3c534a11ee015fcf88fbe3->leave($__internal_567b021bd358698062f01ebfc472c94bcee88fbffc3c534a11ee015fcf88fbe3_prof);

            
            $__internal_0036e4dad173c6133dd407f5521dd672a4a92095e294ad8499ada5cd3bf1b66d->leave($__internal_0036e4dad173c6133dd407f5521dd672a4a92095e294ad8499ada5cd3bf1b66d_prof);


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
", "@SyliusUi/Form/theme.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/views/Form/theme.html.twig");
    }
}
