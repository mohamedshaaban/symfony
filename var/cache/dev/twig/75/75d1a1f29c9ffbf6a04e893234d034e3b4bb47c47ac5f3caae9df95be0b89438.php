<?php

/* SyliusUiBundle:Form:imagesTheme.html.twig */
class __TwigTemplate_ec78e7e3b6486e328dfaa23526273664b4724447948bfee220c4606960724943 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@SyliusUi/Form/theme.html.twig", "SyliusUiBundle:Form:imagesTheme.html.twig", 1);
        $this->blocks = array(
            'collection_widget' => array($this, 'block_collection_widget'),
            'sylius_product_image_widget' => array($this, 'block_sylius_product_image_widget'),
            'sylius_taxon_image_widget' => array($this, 'block_sylius_taxon_image_widget'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@SyliusUi/Form/theme.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4694516a30db66685c72af38b3990c2ad17880785d32f7edb4e4664443596d77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4694516a30db66685c72af38b3990c2ad17880785d32f7edb4e4664443596d77->enter($__internal_4694516a30db66685c72af38b3990c2ad17880785d32f7edb4e4664443596d77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Form:imagesTheme.html.twig"));

        $__internal_9a80788a5e19482dae789216f93f330fdacee9e5523fc75fdd0a30c4f19a5280 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a80788a5e19482dae789216f93f330fdacee9e5523fc75fdd0a30c4f19a5280->enter($__internal_9a80788a5e19482dae789216f93f330fdacee9e5523fc75fdd0a30c4f19a5280_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Form:imagesTheme.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4694516a30db66685c72af38b3990c2ad17880785d32f7edb4e4664443596d77->leave($__internal_4694516a30db66685c72af38b3990c2ad17880785d32f7edb4e4664443596d77_prof);

        
        $__internal_9a80788a5e19482dae789216f93f330fdacee9e5523fc75fdd0a30c4f19a5280->leave($__internal_9a80788a5e19482dae789216f93f330fdacee9e5523fc75fdd0a30c4f19a5280_prof);

    }

    // line 3
    public function block_collection_widget($context, array $blocks = array())
    {
        $__internal_bedc63daa0401675a1022c4c9ac10a1627a0835780bbdc3f446542f1a621be1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bedc63daa0401675a1022c4c9ac10a1627a0835780bbdc3f446542f1a621be1a->enter($__internal_bedc63daa0401675a1022c4c9ac10a1627a0835780bbdc3f446542f1a621be1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        $__internal_951793e8b27924bc9bf768cd3b70d3bd82f9d4c05981205e5c2d59e7ee0e0160 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_951793e8b27924bc9bf768cd3b70d3bd82f9d4c05981205e5c2d59e7ee0e0160->enter($__internal_951793e8b27924bc9bf768cd3b70d3bd82f9d4c05981205e5c2d59e7ee0e0160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        // line 4
        $context["__internal_9556ea5b490bb0df358438008f0f30cf20dead80909fc7cfce1fdfd7b6c7bfc0"] = $this->loadTemplate("SyliusResourceBundle:Macros:notification.html.twig", "SyliusUiBundle:Form:imagesTheme.html.twig", 4);
        // line 5
        echo "    ";
        $context["self"] = $this;
        // line 6
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 6, $this->getSourceContext()); })()), array("class" => (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()))) : ("")) . " controls collection-widget")));
        // line 7
        echo "
    ";
        // line 8
        ob_start();
        // line 9
        echo "        <div data-form-type=\"collection\" ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo "
                ";
        // line 10
        if ((array_key_exists("prototype", $context) && (isset($context["allow_add"]) || array_key_exists("allow_add", $context) ? $context["allow_add"] : (function () { throw new Twig_Error_Runtime('Variable "allow_add" does not exist.', 10, $this->getSourceContext()); })()))) {
            // line 11
            echo "                    data-prototype='";
            echo twig_escape_filter($this->env, $context["self"]->macro_collection_item((isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new Twig_Error_Runtime('Variable "prototype" does not exist.', 11, $this->getSourceContext()); })()), (isset($context["allow_delete"]) || array_key_exists("allow_delete", $context) ? $context["allow_delete"] : (function () { throw new Twig_Error_Runtime('Variable "allow_delete" does not exist.', 11, $this->getSourceContext()); })()), (isset($context["button_delete_label"]) || array_key_exists("button_delete_label", $context) ? $context["button_delete_label"] : (function () { throw new Twig_Error_Runtime('Variable "button_delete_label" does not exist.', 11, $this->getSourceContext()); })()), "__name__"));
            echo "'";
        }
        // line 13
        echo ">
            ";
        // line 14
        echo $context["__internal_9556ea5b490bb0df358438008f0f30cf20dead80909fc7cfce1fdfd7b6c7bfc0"]->macro_error(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 14, $this->getSourceContext()); })()), "vars", array()), "errors", array()));
        echo "

            ";
        // line 16
        if (twig_test_iterable(((array_key_exists("prototypes", $context)) ? (_twig_default_filter((isset($context["prototypes"]) || array_key_exists("prototypes", $context) ? $context["prototypes"] : (function () { throw new Twig_Error_Runtime('Variable "prototypes" does not exist.', 16, $this->getSourceContext()); })()))) : ("")))) {
            // line 17
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["prototypes"]) || array_key_exists("prototypes", $context) ? $context["prototypes"] : (function () { throw new Twig_Error_Runtime('Variable "prototypes" does not exist.', 17, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["key"] => $context["subPrototype"]) {
                // line 18
                echo "                    <input type=\"hidden\" data-form-prototype=\"";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $context["self"]->macro_collection_item($context["subPrototype"], (isset($context["allow_delete"]) || array_key_exists("allow_delete", $context) ? $context["allow_delete"] : (function () { throw new Twig_Error_Runtime('Variable "allow_delete" does not exist.', 18, $this->getSourceContext()); })()), (isset($context["button_delete_label"]) || array_key_exists("button_delete_label", $context) ? $context["button_delete_label"] : (function () { throw new Twig_Error_Runtime('Variable "button_delete_label" does not exist.', 18, $this->getSourceContext()); })()), "__name__"));
                echo "\" />
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['subPrototype'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "            ";
        }
        // line 21
        echo "
            <div data-form-collection=\"list\" class=\"ui three column stackable grid\">
                ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 23, $this->getSourceContext()); })()));
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
            // line 24
            echo "                    ";
            echo $context["self"]->macro_collection_item($context["child"], (isset($context["allow_delete"]) || array_key_exists("allow_delete", $context) ? $context["allow_delete"] : (function () { throw new Twig_Error_Runtime('Variable "allow_delete" does not exist.', 24, $this->getSourceContext()); })()), (isset($context["button_delete_label"]) || array_key_exists("button_delete_label", $context) ? $context["button_delete_label"] : (function () { throw new Twig_Error_Runtime('Variable "button_delete_label" does not exist.', 24, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index0", array()));
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
        // line 26
        echo "            </div>

            ";
        // line 28
        if ((array_key_exists("prototype", $context) && (isset($context["allow_add"]) || array_key_exists("allow_add", $context) ? $context["allow_add"] : (function () { throw new Twig_Error_Runtime('Variable "allow_add" does not exist.', 28, $this->getSourceContext()); })()))) {
            // line 29
            echo "                <a href=\"#\" class=\"ui labeled icon button\" data-form-collection=\"add\">
                    <i class=\"plus square outline icon\"></i>
                    ";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["button_add_label"]) || array_key_exists("button_add_label", $context) ? $context["button_add_label"] : (function () { throw new Twig_Error_Runtime('Variable "button_add_label" does not exist.', 31, $this->getSourceContext()); })())), "html", null, true);
            echo "
                </a>
            ";
        }
        // line 34
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_951793e8b27924bc9bf768cd3b70d3bd82f9d4c05981205e5c2d59e7ee0e0160->leave($__internal_951793e8b27924bc9bf768cd3b70d3bd82f9d4c05981205e5c2d59e7ee0e0160_prof);

        
        $__internal_bedc63daa0401675a1022c4c9ac10a1627a0835780bbdc3f446542f1a621be1a->leave($__internal_bedc63daa0401675a1022c4c9ac10a1627a0835780bbdc3f446542f1a621be1a_prof);

    }

    // line 52
    public function block_sylius_product_image_widget($context, array $blocks = array())
    {
        $__internal_9a3af1a7bf660cca3057f67ed4338cac7635e1c584b284aa691529257de9403e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a3af1a7bf660cca3057f67ed4338cac7635e1c584b284aa691529257de9403e->enter($__internal_9a3af1a7bf660cca3057f67ed4338cac7635e1c584b284aa691529257de9403e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_product_image_widget"));

        $__internal_143c2c6c36c8e5cb26eaabc7306975dbec0dcf0020ede4119c35f9b6a1165397 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_143c2c6c36c8e5cb26eaabc7306975dbec0dcf0020ede4119c35f9b6a1165397->enter($__internal_143c2c6c36c8e5cb26eaabc7306975dbec0dcf0020ede4119c35f9b6a1165397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_product_image_widget"));

        // line 53
        echo "    ";
        ob_start();
        // line 54
        echo "    <div class=\"ui upload box segment\">
        ";
        // line 55
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 55, $this->getSourceContext()); })()), "type", array()), 'row');
        echo "
        <label for=\"";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 56, $this->getSourceContext()); })()), "file", array()), "vars", array()), "id", array()), "html", null, true);
        echo "\" class=\"ui icon labeled button\"><i class=\"cloud upload icon\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.choose_file"), "html", null, true);
        echo "</label>
    ";
        // line 57
        if ( !(null === ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "vars", array(), "any", false, true), "value", array(), "any", false, true), "path", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "vars", array(), "any", false, true), "value", array(), "any", false, true), "path", array()), null)) : (null)))) {
            // line 58
            echo "        <img class=\"ui small bordered image\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 58, $this->getSourceContext()); })()), "vars", array()), "value", array()), "path", array()), "sylius_small"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 58, $this->getSourceContext()); })()), "vars", array()), "value", array()), "type", array()), "html", null, true);
            echo "\" />
    ";
        }
        // line 60
        echo "        <div class=\"ui hidden element\">
            ";
        // line 61
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 61, $this->getSourceContext()); })()), "file", array()), 'widget');
        echo "
        </div>
        <div class=\"ui element\">";
        // line 64
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 64, $this->getSourceContext()); })()), "file", array()), 'errors');
        // line 65
        echo "</div>
    ";
        // line 66
        if ((( !(null === twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 66, $this->getSourceContext()); })()), "id", array())) && (0 != twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 66, $this->getSourceContext()); })()), "variants", array())))) &&  !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 66, $this->getSourceContext()); })()), "simple", array()))) {
            // line 67
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 67, $this->getSourceContext()); })()), "productVariants", array()), 'row');
            echo "
    ";
        }
        // line 69
        echo "    </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_143c2c6c36c8e5cb26eaabc7306975dbec0dcf0020ede4119c35f9b6a1165397->leave($__internal_143c2c6c36c8e5cb26eaabc7306975dbec0dcf0020ede4119c35f9b6a1165397_prof);

        
        $__internal_9a3af1a7bf660cca3057f67ed4338cac7635e1c584b284aa691529257de9403e->leave($__internal_9a3af1a7bf660cca3057f67ed4338cac7635e1c584b284aa691529257de9403e_prof);

    }

    // line 73
    public function block_sylius_taxon_image_widget($context, array $blocks = array())
    {
        $__internal_becc5bb3f55b8bc039564beb4e3d78ad18ec9e057d588ed3f9c5a711c0ab365e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_becc5bb3f55b8bc039564beb4e3d78ad18ec9e057d588ed3f9c5a711c0ab365e->enter($__internal_becc5bb3f55b8bc039564beb4e3d78ad18ec9e057d588ed3f9c5a711c0ab365e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_taxon_image_widget"));

        $__internal_318874a17cfbddc0bb22ab76b5b3aba93d617acc4ad9803556bc552cfcbb65d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_318874a17cfbddc0bb22ab76b5b3aba93d617acc4ad9803556bc552cfcbb65d0->enter($__internal_318874a17cfbddc0bb22ab76b5b3aba93d617acc4ad9803556bc552cfcbb65d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_taxon_image_widget"));

        // line 74
        echo "    ";
        ob_start();
        // line 75
        echo "    <div class=\"ui upload box segment\">
        ";
        // line 76
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 76, $this->getSourceContext()); })()), "type", array()), 'row');
        echo "
        ";
        // line 77
        if ((null === ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "vars", array(), "any", false, true), "value", array(), "any", false, true), "path", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "vars", array(), "any", false, true), "value", array(), "any", false, true), "path", array()), null)) : (null)))) {
            // line 78
            echo "            <label for=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 78, $this->getSourceContext()); })()), "file", array()), "vars", array()), "id", array()), "html", null, true);
            echo "\" class=\"ui icon labeled button\"><i class=\"cloud upload icon\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.choose_file"), "html", null, true);
            echo "</label>
        ";
        } else {
            // line 80
            echo "            <img class=\"ui small bordered image\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 80, $this->getSourceContext()); })()), "vars", array()), "value", array()), "path", array()), "sylius_small"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 80, $this->getSourceContext()); })()), "vars", array()), "value", array()), "type", array()), "html", null, true);
            echo "\" />
            <label for=\"";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 81, $this->getSourceContext()); })()), "file", array()), "vars", array()), "id", array()), "html", null, true);
            echo "\" class=\"ui icon labeled button\"><i class=\"cloud upload icon\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.change_file"), "html", null, true);
            echo "</label>
        ";
        }
        // line 83
        echo "        <div class=\"ui hidden element\">
            ";
        // line 84
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 84, $this->getSourceContext()); })()), "file", array()), 'widget');
        echo "
        </div>
        <div class=\"ui element\">";
        // line 87
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 87, $this->getSourceContext()); })()), "file", array()), 'errors');
        // line 88
        echo "</div>
    </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_318874a17cfbddc0bb22ab76b5b3aba93d617acc4ad9803556bc552cfcbb65d0->leave($__internal_318874a17cfbddc0bb22ab76b5b3aba93d617acc4ad9803556bc552cfcbb65d0_prof);

        
        $__internal_becc5bb3f55b8bc039564beb4e3d78ad18ec9e057d588ed3f9c5a711c0ab365e->leave($__internal_becc5bb3f55b8bc039564beb4e3d78ad18ec9e057d588ed3f9c5a711c0ab365e_prof);

    }

    // line 38
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
            $__internal_b337730a35f0db83513fe19061cf5ba8261ad0fdc98ebfba5c8f77cc02219620 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_b337730a35f0db83513fe19061cf5ba8261ad0fdc98ebfba5c8f77cc02219620->enter($__internal_b337730a35f0db83513fe19061cf5ba8261ad0fdc98ebfba5c8f77cc02219620_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "collection_item"));

            $__internal_3fd6f1ec1b17c846b4c2a31f929150acf92bb07c0b5225c0e1388213ac8d66bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_3fd6f1ec1b17c846b4c2a31f929150acf92bb07c0b5225c0e1388213ac8d66bb->enter($__internal_3fd6f1ec1b17c846b4c2a31f929150acf92bb07c0b5225c0e1388213ac8d66bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "collection_item"));

            // line 39
            echo "    ";
            ob_start();
            // line 40
            echo "        <div data-form-collection=\"item\" data-form-collection-index=\"";
            echo twig_escape_filter($this->env, (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new Twig_Error_Runtime('Variable "index" does not exist.', 40, $this->getSourceContext()); })()), "html", null, true);
            echo "\" class=\"column\">
            ";
            // line 41
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 41, $this->getSourceContext()); })()), 'widget');
            echo "
            ";
            // line 42
            if ((isset($context["allow_delete"]) || array_key_exists("allow_delete", $context) ? $context["allow_delete"] : (function () { throw new Twig_Error_Runtime('Variable "allow_delete" does not exist.', 42, $this->getSourceContext()); })())) {
                // line 43
                echo "                <a href=\"#\" data-form-collection=\"delete\" class=\"ui red labeled icon button\" style=\"margin-bottom: 1em;\">
                    <i class=\"trash icon\"></i>
                    ";
                // line 45
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["button_delete_label"]) || array_key_exists("button_delete_label", $context) ? $context["button_delete_label"] : (function () { throw new Twig_Error_Runtime('Variable "button_delete_label" does not exist.', 45, $this->getSourceContext()); })())), "html", null, true);
                echo "
                </a>
            ";
            }
            // line 48
            echo "        </div>
    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            
            $__internal_3fd6f1ec1b17c846b4c2a31f929150acf92bb07c0b5225c0e1388213ac8d66bb->leave($__internal_3fd6f1ec1b17c846b4c2a31f929150acf92bb07c0b5225c0e1388213ac8d66bb_prof);

            
            $__internal_b337730a35f0db83513fe19061cf5ba8261ad0fdc98ebfba5c8f77cc02219620->leave($__internal_b337730a35f0db83513fe19061cf5ba8261ad0fdc98ebfba5c8f77cc02219620_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "SyliusUiBundle:Form:imagesTheme.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  350 => 48,  344 => 45,  340 => 43,  338 => 42,  334 => 41,  329 => 40,  326 => 39,  305 => 38,  292 => 88,  290 => 87,  285 => 84,  282 => 83,  275 => 81,  268 => 80,  260 => 78,  258 => 77,  254 => 76,  251 => 75,  248 => 74,  239 => 73,  227 => 69,  221 => 67,  219 => 66,  216 => 65,  214 => 64,  209 => 61,  206 => 60,  198 => 58,  196 => 57,  190 => 56,  186 => 55,  183 => 54,  180 => 53,  171 => 52,  159 => 34,  153 => 31,  149 => 29,  147 => 28,  143 => 26,  126 => 24,  109 => 23,  105 => 21,  102 => 20,  91 => 18,  86 => 17,  84 => 16,  79 => 14,  76 => 13,  71 => 11,  69 => 10,  64 => 9,  62 => 8,  59 => 7,  56 => 6,  53 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@SyliusUi/Form/theme.html.twig' %}

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

            <div data-form-collection=\"list\" class=\"ui three column stackable grid\">
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
        <div data-form-collection=\"item\" data-form-collection-index=\"{{ index }}\" class=\"column\">
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

{% block sylius_product_image_widget %}
    {% spaceless %}
    <div class=\"ui upload box segment\">
        {{ form_row(form.type) }}
        <label for=\"{{ form.file.vars.id }}\" class=\"ui icon labeled button\"><i class=\"cloud upload icon\"></i> {{ 'sylius.ui.choose_file'|trans }}</label>
    {% if form.vars.value.path|default(null) is not null %}
        <img class=\"ui small bordered image\" src=\"{{ form.vars.value.path|imagine_filter('sylius_small') }}\" alt=\"{{ form.vars.value.type }}\" />
    {% endif %}
        <div class=\"ui hidden element\">
            {{ form_widget(form.file) }}
        </div>
        <div class=\"ui element\">
            {{- form_errors(form.file) -}}
        </div>
    {% if product.id is not null and 0 != product.variants|length and not product.simple %}
        {{ form_row(form.productVariants) }}
    {% endif %}
    </div>
    {% endspaceless %}
{% endblock %}

{% block sylius_taxon_image_widget %}
    {% spaceless %}
    <div class=\"ui upload box segment\">
        {{ form_row(form.type) }}
        {% if form.vars.value.path|default(null) is null %}
            <label for=\"{{ form.file.vars.id }}\" class=\"ui icon labeled button\"><i class=\"cloud upload icon\"></i> {{ 'sylius.ui.choose_file'|trans }}</label>
        {% else %}
            <img class=\"ui small bordered image\" src=\"{{ form.vars.value.path|imagine_filter('sylius_small') }}\" alt=\"{{ form.vars.value.type }}\" />
            <label for=\"{{ form.file.vars.id }}\" class=\"ui icon labeled button\"><i class=\"cloud upload icon\"></i> {{ 'sylius.ui.change_file'|trans }}</label>
        {% endif %}
        <div class=\"ui hidden element\">
            {{ form_widget(form.file) }}
        </div>
        <div class=\"ui element\">
            {{- form_errors(form.file) -}}
        </div>
    </div>
    {% endspaceless %}
{% endblock %}
", "SyliusUiBundle:Form:imagesTheme.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/views/Form/imagesTheme.html.twig");
    }
}
