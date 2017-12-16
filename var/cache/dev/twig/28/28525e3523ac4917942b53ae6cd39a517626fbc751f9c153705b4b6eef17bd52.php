<?php

/* SonataBlockBundle:Block:block_side_menu_template.html.twig */
class __TwigTemplate_3974821d70781f66df1525e1673d1d1ef3e718caf172664b0a7c354601acafb0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "SonataBlockBundle:Block:block_side_menu_template.html.twig", 12);
        $this->blocks = array(
            'list' => array($this, 'block_list'),
            'item' => array($this, 'block_item'),
            'linkElement' => array($this, 'block_linkElement'),
            'spanElement' => array($this, 'block_spanElement'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0db163736bf379827bca60ed92dc148a3e76232317ae279b29725ebc8e4cf379 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0db163736bf379827bca60ed92dc148a3e76232317ae279b29725ebc8e4cf379->enter($__internal_0db163736bf379827bca60ed92dc148a3e76232317ae279b29725ebc8e4cf379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_side_menu_template.html.twig"));

        $__internal_f3f704935e7e4aab83d7caa87d8a76d1ec2a1daf2e864353a1c7f087dd09a182 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3f704935e7e4aab83d7caa87d8a76d1ec2a1daf2e864353a1c7f087dd09a182->enter($__internal_f3f704935e7e4aab83d7caa87d8a76d1ec2a1daf2e864353a1c7f087dd09a182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_side_menu_template.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0db163736bf379827bca60ed92dc148a3e76232317ae279b29725ebc8e4cf379->leave($__internal_0db163736bf379827bca60ed92dc148a3e76232317ae279b29725ebc8e4cf379_prof);

        
        $__internal_f3f704935e7e4aab83d7caa87d8a76d1ec2a1daf2e864353a1c7f087dd09a182->leave($__internal_f3f704935e7e4aab83d7caa87d8a76d1ec2a1daf2e864353a1c7f087dd09a182_prof);

    }

    // line 14
    public function block_list($context, array $blocks = array())
    {
        $__internal_2e297f6e49fe4527d462e74c9db81543c9f7c7b680dafe0c370e2f6bffc6843d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e297f6e49fe4527d462e74c9db81543c9f7c7b680dafe0c370e2f6bffc6843d->enter($__internal_2e297f6e49fe4527d462e74c9db81543c9f7c7b680dafe0c370e2f6bffc6843d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        $__internal_e5d141e08c86a8a37564f767ae3206254e9a8e3dc459c308a61f7e5624f926af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5d141e08c86a8a37564f767ae3206254e9a8e3dc459c308a61f7e5624f926af->enter($__internal_e5d141e08c86a8a37564f767ae3206254e9a8e3dc459c308a61f7e5624f926af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        // line 15
        $context["macros"] = $this->loadTemplate("knp_menu.html.twig", "SonataBlockBundle:Block:block_side_menu_template.html.twig", 15);
        // line 16
        echo "    ";
        if (((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 16, $this->getSourceContext()); })()), "hasChildren", array()) &&  !(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 16, $this->getSourceContext()); })()), "depth", array()) === 0)) && twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 16, $this->getSourceContext()); })()), "displayChildren", array()))) {
            // line 17
            echo "        <div";
            echo $context["macros"]->macro_attributes((isset($context["listAttributes"]) || array_key_exists("listAttributes", $context) ? $context["listAttributes"] : (function () { throw new Twig_Error_Runtime('Variable "listAttributes" does not exist.', 17, $this->getSourceContext()); })()));
            echo ">
            ";
            // line 18
            $this->displayBlock("children", $context, $blocks);
            echo "
        </div>
    ";
        }
        
        $__internal_e5d141e08c86a8a37564f767ae3206254e9a8e3dc459c308a61f7e5624f926af->leave($__internal_e5d141e08c86a8a37564f767ae3206254e9a8e3dc459c308a61f7e5624f926af_prof);

        
        $__internal_2e297f6e49fe4527d462e74c9db81543c9f7c7b680dafe0c370e2f6bffc6843d->leave($__internal_2e297f6e49fe4527d462e74c9db81543c9f7c7b680dafe0c370e2f6bffc6843d_prof);

    }

    // line 23
    public function block_item($context, array $blocks = array())
    {
        $__internal_7adba79d7789823e60e756e1d48b260af7beec627d46ab43d04fc93ab7cc98d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7adba79d7789823e60e756e1d48b260af7beec627d46ab43d04fc93ab7cc98d3->enter($__internal_7adba79d7789823e60e756e1d48b260af7beec627d46ab43d04fc93ab7cc98d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        $__internal_4c4d88777ba6a04b59e15da1f914a32ae05c38234c48edc2fbdc35040483db2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c4d88777ba6a04b59e15da1f914a32ae05c38234c48edc2fbdc35040483db2c->enter($__internal_4c4d88777ba6a04b59e15da1f914a32ae05c38234c48edc2fbdc35040483db2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        // line 24
        $context["macros"] = $this->loadTemplate("knp_menu.html.twig", "SonataBlockBundle:Block:block_side_menu_template.html.twig", 24);
        // line 25
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 25, $this->getSourceContext()); })()), "displayed", array())) {
            // line 26
            echo "        ";
            // line 27
            $context["classes"] = (( !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 27, $this->getSourceContext()); })()), "attribute", array(0 => "class"), "method"))) ? (array(0 => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 27, $this->getSourceContext()); })()), "attribute", array(0 => "class"), "method"))) : (array()));
            // line 28
            if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["matcher"]) || array_key_exists("matcher", $context) ? $context["matcher"] : (function () { throw new Twig_Error_Runtime('Variable "matcher" does not exist.', 28, $this->getSourceContext()); })()), "isCurrent", array(0 => (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 28, $this->getSourceContext()); })())), "method")) {
                // line 29
                $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new Twig_Error_Runtime('Variable "classes" does not exist.', 29, $this->getSourceContext()); })()), array(0 => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 29, $this->getSourceContext()); })()), "currentClass", array())));
            } elseif (twig_get_attribute($this->env, $this->getSourceContext(),             // line 30
(isset($context["matcher"]) || array_key_exists("matcher", $context) ? $context["matcher"] : (function () { throw new Twig_Error_Runtime('Variable "matcher" does not exist.', 30, $this->getSourceContext()); })()), "isAncestor", array(0 => (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 30, $this->getSourceContext()); })()), 1 => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 30, $this->getSourceContext()); })()), "depth", array())), "method")) {
                // line 31
                $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new Twig_Error_Runtime('Variable "classes" does not exist.', 31, $this->getSourceContext()); })()), array(0 => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 31, $this->getSourceContext()); })()), "ancestorClass", array())));
            }
            // line 33
            if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 33, $this->getSourceContext()); })()), "actsLikeFirst", array())) {
                // line 34
                $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new Twig_Error_Runtime('Variable "classes" does not exist.', 34, $this->getSourceContext()); })()), array(0 => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 34, $this->getSourceContext()); })()), "firstClass", array())));
            }
            // line 36
            if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 36, $this->getSourceContext()); })()), "actsLikeLast", array())) {
                // line 37
                $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new Twig_Error_Runtime('Variable "classes" does not exist.', 37, $this->getSourceContext()); })()), array(0 => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 37, $this->getSourceContext()); })()), "lastClass", array())));
            }
            // line 39
            $context["attributes"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 39, $this->getSourceContext()); })()), "attributes", array());
            // line 40
            if ( !twig_test_empty((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new Twig_Error_Runtime('Variable "classes" does not exist.', 40, $this->getSourceContext()); })()))) {
                // line 41
                $context["attributes"] = twig_array_merge((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new Twig_Error_Runtime('Variable "attributes" does not exist.', 41, $this->getSourceContext()); })()), array("class" => twig_join_filter((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new Twig_Error_Runtime('Variable "classes" does not exist.', 41, $this->getSourceContext()); })()), " ")));
            }
            // line 43
            echo "        ";
            // line 44
            if (( !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 44, $this->getSourceContext()); })()), "uri", array())) && ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 44, $this->getSourceContext()); })()), "current", array()) || twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 44, $this->getSourceContext()); })()), "currentAsLink", array())))) {
                // line 45
                echo "            ";
                $this->displayBlock("linkElement", $context, $blocks);
            } else {
                // line 47
                echo "            ";
                $this->displayBlock("spanElement", $context, $blocks);
            }
            // line 49
            echo "        ";
            // line 50
            $context["childrenClasses"] = (( !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 50, $this->getSourceContext()); })()), "childrenAttribute", array(0 => "class"), "method"))) ? (array(0 => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 50, $this->getSourceContext()); })()), "childrenAttribute", array(0 => "class"), "method"))) : (array()));
            // line 51
            $context["childrenClasses"] = twig_array_merge((isset($context["childrenClasses"]) || array_key_exists("childrenClasses", $context) ? $context["childrenClasses"] : (function () { throw new Twig_Error_Runtime('Variable "childrenClasses" does not exist.', 51, $this->getSourceContext()); })()), array(0 => ("menu_level_" . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 51, $this->getSourceContext()); })()), "level", array()))));
            // line 52
            $context["listAttributes"] = twig_array_merge(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 52, $this->getSourceContext()); })()), "childrenAttributes", array()), array("class" => twig_join_filter((isset($context["childrenClasses"]) || array_key_exists("childrenClasses", $context) ? $context["childrenClasses"] : (function () { throw new Twig_Error_Runtime('Variable "childrenClasses" does not exist.', 52, $this->getSourceContext()); })()), " ")));
            // line 53
            echo "        ";
            $this->displayBlock("list", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_4c4d88777ba6a04b59e15da1f914a32ae05c38234c48edc2fbdc35040483db2c->leave($__internal_4c4d88777ba6a04b59e15da1f914a32ae05c38234c48edc2fbdc35040483db2c_prof);

        
        $__internal_7adba79d7789823e60e756e1d48b260af7beec627d46ab43d04fc93ab7cc98d3->leave($__internal_7adba79d7789823e60e756e1d48b260af7beec627d46ab43d04fc93ab7cc98d3_prof);

    }

    // line 57
    public function block_linkElement($context, array $blocks = array())
    {
        $__internal_99cfd3515937c44e469c186d066dd6a84424dbd9aa0ef4ad86023a2c0bcbf23e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99cfd3515937c44e469c186d066dd6a84424dbd9aa0ef4ad86023a2c0bcbf23e->enter($__internal_99cfd3515937c44e469c186d066dd6a84424dbd9aa0ef4ad86023a2c0bcbf23e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        $__internal_57d294563963479602df5d261cd4bd3d99d7f204a3d16976cdf3b29da0069a4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57d294563963479602df5d261cd4bd3d99d7f204a3d16976cdf3b29da0069a4a->enter($__internal_57d294563963479602df5d261cd4bd3d99d7f204a3d16976cdf3b29da0069a4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        echo "<a href=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 57, $this->getSourceContext()); })()), "uri", array()), "html", null, true);
        echo "\"";
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["macros"]) || array_key_exists("macros", $context) ? $context["macros"] : (function () { throw new Twig_Error_Runtime('Variable "macros" does not exist.', 57, $this->getSourceContext()); })()), "attributes", array(0 => twig_array_merge(twig_array_merge(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 57, $this->getSourceContext()); })()), "attributes", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 57, $this->getSourceContext()); })()), "linkAttributes", array())), (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new Twig_Error_Runtime('Variable "attributes" does not exist.', 57, $this->getSourceContext()); })()))), "method");
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</a>";
        
        $__internal_57d294563963479602df5d261cd4bd3d99d7f204a3d16976cdf3b29da0069a4a->leave($__internal_57d294563963479602df5d261cd4bd3d99d7f204a3d16976cdf3b29da0069a4a_prof);

        
        $__internal_99cfd3515937c44e469c186d066dd6a84424dbd9aa0ef4ad86023a2c0bcbf23e->leave($__internal_99cfd3515937c44e469c186d066dd6a84424dbd9aa0ef4ad86023a2c0bcbf23e_prof);

    }

    // line 59
    public function block_spanElement($context, array $blocks = array())
    {
        $__internal_850ca88d53cb28c1ee528ff8c2b7396b351d99ad3ae750fde4a100a5cd3fa5b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_850ca88d53cb28c1ee528ff8c2b7396b351d99ad3ae750fde4a100a5cd3fa5b4->enter($__internal_850ca88d53cb28c1ee528ff8c2b7396b351d99ad3ae750fde4a100a5cd3fa5b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        $__internal_c3baf813ea873181e863a6051ee6a205b043eaec2fe733d39845de9647ad5f98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3baf813ea873181e863a6051ee6a205b043eaec2fe733d39845de9647ad5f98->enter($__internal_c3baf813ea873181e863a6051ee6a205b043eaec2fe733d39845de9647ad5f98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        echo "<div";
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["macros"]) || array_key_exists("macros", $context) ? $context["macros"] : (function () { throw new Twig_Error_Runtime('Variable "macros" does not exist.', 59, $this->getSourceContext()); })()), "attributes", array(0 => twig_array_merge(twig_array_merge(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 59, $this->getSourceContext()); })()), "attributes", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 59, $this->getSourceContext()); })()), "labelAttributes", array())), (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new Twig_Error_Runtime('Variable "attributes" does not exist.', 59, $this->getSourceContext()); })()))), "method");
        echo "><h4 class=\"list-group-item-heading\">";
        $this->displayBlock("label", $context, $blocks);
        echo "</h4></div>";
        
        $__internal_c3baf813ea873181e863a6051ee6a205b043eaec2fe733d39845de9647ad5f98->leave($__internal_c3baf813ea873181e863a6051ee6a205b043eaec2fe733d39845de9647ad5f98_prof);

        
        $__internal_850ca88d53cb28c1ee528ff8c2b7396b351d99ad3ae750fde4a100a5cd3fa5b4->leave($__internal_850ca88d53cb28c1ee528ff8c2b7396b351d99ad3ae750fde4a100a5cd3fa5b4_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_side_menu_template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 59,  154 => 57,  140 => 53,  138 => 52,  136 => 51,  134 => 50,  132 => 49,  128 => 47,  124 => 45,  122 => 44,  120 => 43,  117 => 41,  115 => 40,  113 => 39,  110 => 37,  108 => 36,  105 => 34,  103 => 33,  100 => 31,  98 => 30,  96 => 29,  94 => 28,  92 => 27,  90 => 26,  87 => 25,  85 => 24,  76 => 23,  62 => 18,  57 => 17,  54 => 16,  52 => 15,  43 => 14,  11 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends 'knp_menu.html.twig' %}

{% block list %}
{% import 'knp_menu.html.twig' as macros %}
    {% if item.hasChildren and options.depth is not same as(0) and item.displayChildren %}
        <div{{ macros.attributes(listAttributes) }}>
            {{ block('children') }}
        </div>
    {% endif %}
{% endblock %}

{% block item %}
{% import 'knp_menu.html.twig' as macros %}
    {% if item.displayed %}
        {# building the class of the item #}
        {%- set classes = item.attribute('class') is not empty ? [item.attribute('class')] : [] %}
        {%- if matcher.isCurrent(item) %}
            {%- set classes = classes|merge([options.currentClass]) %}
        {%- elseif matcher.isAncestor(item, options.depth) %}
            {%- set classes = classes|merge([options.ancestorClass]) %}
        {%- endif %}
        {%- if item.actsLikeFirst %}
            {%- set classes = classes|merge([options.firstClass]) %}
        {%- endif %}
        {%- if item.actsLikeLast %}
            {%- set classes = classes|merge([options.lastClass]) %}
        {%- endif %}
        {%- set attributes = item.attributes %}
        {%- if classes is not empty %}
            {%- set attributes = attributes|merge({'class': classes|join(' ')}) %}
        {%- endif %}
        {# displaying the item #}
        {%- if item.uri is not empty and (not item.current or options.currentAsLink) %}
            {{ block('linkElement') }}
        {%- else %}
            {{ block('spanElement') }}
        {%- endif %}
        {# render the list of children#}
        {%- set childrenClasses = item.childrenAttribute('class') is not empty ? [item.childrenAttribute('class')] : [] %}
        {%- set childrenClasses = childrenClasses|merge(['menu_level_' ~ item.level]) %}
        {%- set listAttributes = item.childrenAttributes|merge({'class': childrenClasses|join(' ') }) %}
        {{ block('list') }}
    {% endif %}
{% endblock %}

{% block linkElement %}<a href=\"{{ item.uri }}\"{{ macros.attributes(item.attributes|merge(item.linkAttributes)|merge(attributes)) }}>{{ block('label') }}</a>{% endblock %}

{% block spanElement %}<div{{ macros.attributes(item.attributes|merge(item.labelAttributes)|merge(attributes)) }}><h4 class=\"list-group-item-heading\">{{ block('label') }}</h4></div>{% endblock %}
", "SonataBlockBundle:Block:block_side_menu_template.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sonata-project\\block-bundle/Resources/views/Block/block_side_menu_template.html.twig");
    }
}
