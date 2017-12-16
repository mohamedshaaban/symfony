<?php

/* @SyliusUi/Form/imagesTheme.html.twig */
class __TwigTemplate_44fa1588cfcffbe27a96396870d15a6718c58dcdb2a1255ae07cb7b60930f8fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@SyliusUi/Form/theme.html.twig", "@SyliusUi/Form/imagesTheme.html.twig", 1);
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
        $__internal_f4329b70cd8f72d422230ae7ea56f46afc91badeed6ceefcd827302f0e015aae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4329b70cd8f72d422230ae7ea56f46afc91badeed6ceefcd827302f0e015aae->enter($__internal_f4329b70cd8f72d422230ae7ea56f46afc91badeed6ceefcd827302f0e015aae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusUi/Form/imagesTheme.html.twig"));

        $__internal_5325274fe7f13faba80d2599c5fddfb772d9afd892f26907fefd49361f59e80d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5325274fe7f13faba80d2599c5fddfb772d9afd892f26907fefd49361f59e80d->enter($__internal_5325274fe7f13faba80d2599c5fddfb772d9afd892f26907fefd49361f59e80d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusUi/Form/imagesTheme.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4329b70cd8f72d422230ae7ea56f46afc91badeed6ceefcd827302f0e015aae->leave($__internal_f4329b70cd8f72d422230ae7ea56f46afc91badeed6ceefcd827302f0e015aae_prof);

        
        $__internal_5325274fe7f13faba80d2599c5fddfb772d9afd892f26907fefd49361f59e80d->leave($__internal_5325274fe7f13faba80d2599c5fddfb772d9afd892f26907fefd49361f59e80d_prof);

    }

    // line 3
    public function block_collection_widget($context, array $blocks = array())
    {
        $__internal_9e80a788b1485024368a00c12897758cfacd8920cc03946b584944169711bf40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e80a788b1485024368a00c12897758cfacd8920cc03946b584944169711bf40->enter($__internal_9e80a788b1485024368a00c12897758cfacd8920cc03946b584944169711bf40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        $__internal_3af881e39bfe849eb017f35a389b76d65c7c5fa8811c6c77f9b17a8743eb5629 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3af881e39bfe849eb017f35a389b76d65c7c5fa8811c6c77f9b17a8743eb5629->enter($__internal_3af881e39bfe849eb017f35a389b76d65c7c5fa8811c6c77f9b17a8743eb5629_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        // line 4
        $context["__internal_5b13bb2a9149bfc118dd022cbc753cffe431b007856c6d9c6d57195dc2cafa7a"] = $this->loadTemplate("SyliusResourceBundle:Macros:notification.html.twig", "@SyliusUi/Form/imagesTheme.html.twig", 4);
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
        echo $context["__internal_5b13bb2a9149bfc118dd022cbc753cffe431b007856c6d9c6d57195dc2cafa7a"]->macro_error(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 14, $this->getSourceContext()); })()), "vars", array()), "errors", array()));
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
        
        $__internal_3af881e39bfe849eb017f35a389b76d65c7c5fa8811c6c77f9b17a8743eb5629->leave($__internal_3af881e39bfe849eb017f35a389b76d65c7c5fa8811c6c77f9b17a8743eb5629_prof);

        
        $__internal_9e80a788b1485024368a00c12897758cfacd8920cc03946b584944169711bf40->leave($__internal_9e80a788b1485024368a00c12897758cfacd8920cc03946b584944169711bf40_prof);

    }

    // line 52
    public function block_sylius_product_image_widget($context, array $blocks = array())
    {
        $__internal_f7ac07da41f54689f3f4403d62a340c672092b1747af4054ce9d86046a1117ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7ac07da41f54689f3f4403d62a340c672092b1747af4054ce9d86046a1117ac->enter($__internal_f7ac07da41f54689f3f4403d62a340c672092b1747af4054ce9d86046a1117ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_product_image_widget"));

        $__internal_28829a6e40e727cb57b1969f45536b14e9cb0057962446c316d37d60987cc62a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28829a6e40e727cb57b1969f45536b14e9cb0057962446c316d37d60987cc62a->enter($__internal_28829a6e40e727cb57b1969f45536b14e9cb0057962446c316d37d60987cc62a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_product_image_widget"));

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
        
        $__internal_28829a6e40e727cb57b1969f45536b14e9cb0057962446c316d37d60987cc62a->leave($__internal_28829a6e40e727cb57b1969f45536b14e9cb0057962446c316d37d60987cc62a_prof);

        
        $__internal_f7ac07da41f54689f3f4403d62a340c672092b1747af4054ce9d86046a1117ac->leave($__internal_f7ac07da41f54689f3f4403d62a340c672092b1747af4054ce9d86046a1117ac_prof);

    }

    // line 73
    public function block_sylius_taxon_image_widget($context, array $blocks = array())
    {
        $__internal_a9eeda395fa52141d6264d33756bccc6f5c4367963d1999898fcc3bc0d456d6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9eeda395fa52141d6264d33756bccc6f5c4367963d1999898fcc3bc0d456d6a->enter($__internal_a9eeda395fa52141d6264d33756bccc6f5c4367963d1999898fcc3bc0d456d6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_taxon_image_widget"));

        $__internal_13b9767b8cde331da8ef5bca3a403098d61adcf4cbeadd63cdb183993da27036 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13b9767b8cde331da8ef5bca3a403098d61adcf4cbeadd63cdb183993da27036->enter($__internal_13b9767b8cde331da8ef5bca3a403098d61adcf4cbeadd63cdb183993da27036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sylius_taxon_image_widget"));

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
        
        $__internal_13b9767b8cde331da8ef5bca3a403098d61adcf4cbeadd63cdb183993da27036->leave($__internal_13b9767b8cde331da8ef5bca3a403098d61adcf4cbeadd63cdb183993da27036_prof);

        
        $__internal_a9eeda395fa52141d6264d33756bccc6f5c4367963d1999898fcc3bc0d456d6a->leave($__internal_a9eeda395fa52141d6264d33756bccc6f5c4367963d1999898fcc3bc0d456d6a_prof);

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
            $__internal_f6f63625e95a56d530f6f116e043a8dd294e2cb235104f40ac0ccf734ac11d69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_f6f63625e95a56d530f6f116e043a8dd294e2cb235104f40ac0ccf734ac11d69->enter($__internal_f6f63625e95a56d530f6f116e043a8dd294e2cb235104f40ac0ccf734ac11d69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "collection_item"));

            $__internal_5dd5a46c767a27acaf07e47baaa84d5984677073a0d675b0e06eeba2358660b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_5dd5a46c767a27acaf07e47baaa84d5984677073a0d675b0e06eeba2358660b1->enter($__internal_5dd5a46c767a27acaf07e47baaa84d5984677073a0d675b0e06eeba2358660b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "collection_item"));

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
            
            $__internal_5dd5a46c767a27acaf07e47baaa84d5984677073a0d675b0e06eeba2358660b1->leave($__internal_5dd5a46c767a27acaf07e47baaa84d5984677073a0d675b0e06eeba2358660b1_prof);

            
            $__internal_f6f63625e95a56d530f6f116e043a8dd294e2cb235104f40ac0ccf734ac11d69->leave($__internal_f6f63625e95a56d530f6f116e043a8dd294e2cb235104f40ac0ccf734ac11d69_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@SyliusUi/Form/imagesTheme.html.twig";
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
", "@SyliusUi/Form/imagesTheme.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle\\Resources\\views\\Form\\imagesTheme.html.twig");
    }
}
