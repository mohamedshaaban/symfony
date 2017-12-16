<?php

/* SyliusUiBundle:Menu:top.html.twig */
class __TwigTemplate_10c53717ea6e775263b4fbe8eb39db1b2ae25bfc7a7c37846928fdfbdf3c97bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "SyliusUiBundle:Menu:top.html.twig", 1);
        $this->blocks = array(
            'root' => array($this, 'block_root'),
            'items' => array($this, 'block_items'),
            'item' => array($this, 'block_item'),
            'link' => array($this, 'block_link'),
            'transition' => array($this, 'block_transition'),
            'icon' => array($this, 'block_icon'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_284ec0e5eaad95f70dbac38d3c8b922bdac5fafc48977b48806671ebee2152da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_284ec0e5eaad95f70dbac38d3c8b922bdac5fafc48977b48806671ebee2152da->enter($__internal_284ec0e5eaad95f70dbac38d3c8b922bdac5fafc48977b48806671ebee2152da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Menu:top.html.twig"));

        $__internal_5639d4cf3726a9d4439a5dc047a1499be84d0977a4283139f2d57b09ec409fd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5639d4cf3726a9d4439a5dc047a1499be84d0977a4283139f2d57b09ec409fd3->enter($__internal_5639d4cf3726a9d4439a5dc047a1499be84d0977a4283139f2d57b09ec409fd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle:Menu:top.html.twig"));

        // line 3
        $context["buttons"] = $this->loadTemplate("@SyliusUi/Macro/buttons.html.twig", "SyliusUiBundle:Menu:top.html.twig", 3);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_284ec0e5eaad95f70dbac38d3c8b922bdac5fafc48977b48806671ebee2152da->leave($__internal_284ec0e5eaad95f70dbac38d3c8b922bdac5fafc48977b48806671ebee2152da_prof);

        
        $__internal_5639d4cf3726a9d4439a5dc047a1499be84d0977a4283139f2d57b09ec409fd3->leave($__internal_5639d4cf3726a9d4439a5dc047a1499be84d0977a4283139f2d57b09ec409fd3_prof);

    }

    // line 5
    public function block_root($context, array $blocks = array())
    {
        $__internal_23e612b77da99561beb4a8f542038636446d6879f14bd04c5c75a819c5ad86ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23e612b77da99561beb4a8f542038636446d6879f14bd04c5c75a819c5ad86ed->enter($__internal_23e612b77da99561beb4a8f542038636446d6879f14bd04c5c75a819c5ad86ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        $__internal_6ca878acccfb530c5f0c4fc2b3deb5baaf207c820cd38cb662b497268854b434 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ca878acccfb530c5f0c4fc2b3deb5baaf207c820cd38cb662b497268854b434->enter($__internal_6ca878acccfb530c5f0c4fc2b3deb5baaf207c820cd38cb662b497268854b434_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        // line 6
        echo "    ";
        $context["id"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 6, $this->getSourceContext()); })()), "extra", array(0 => "column_id"), "method");
        // line 7
        echo "
    <div class=\"six wide right aligned column\"";
        // line 8
        if ((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 8, $this->getSourceContext()); })())) {
            echo " id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
            echo "\"";
        }
        echo ">
        ";
        // line 9
        $this->displayBlock("items", $context, $blocks);
        echo "
    </div>
";
        
        $__internal_6ca878acccfb530c5f0c4fc2b3deb5baaf207c820cd38cb662b497268854b434->leave($__internal_6ca878acccfb530c5f0c4fc2b3deb5baaf207c820cd38cb662b497268854b434_prof);

        
        $__internal_23e612b77da99561beb4a8f542038636446d6879f14bd04c5c75a819c5ad86ed->leave($__internal_23e612b77da99561beb4a8f542038636446d6879f14bd04c5c75a819c5ad86ed_prof);

    }

    // line 13
    public function block_items($context, array $blocks = array())
    {
        $__internal_46a76f99a88facd7a81a8c437ec84641b065fada79f8169a20a2f1bace89a67f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46a76f99a88facd7a81a8c437ec84641b065fada79f8169a20a2f1bace89a67f->enter($__internal_46a76f99a88facd7a81a8c437ec84641b065fada79f8169a20a2f1bace89a67f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "items"));

        $__internal_04d1579e54df29519aba7ee6ff8ee9d18a7bfe65c14148e3f4d8492a5e5c74d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04d1579e54df29519aba7ee6ff8ee9d18a7bfe65c14148e3f4d8492a5e5c74d2->enter($__internal_04d1579e54df29519aba7ee6ff8ee9d18a7bfe65c14148e3f4d8492a5e5c74d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "items"));

        // line 14
        echo "    <div class=\"ui buttons\">
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "children", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 16
            echo "            ";
            $this->displayBlock("item", $context, $blocks);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "    </div>
";
        
        $__internal_04d1579e54df29519aba7ee6ff8ee9d18a7bfe65c14148e3f4d8492a5e5c74d2->leave($__internal_04d1579e54df29519aba7ee6ff8ee9d18a7bfe65c14148e3f4d8492a5e5c74d2_prof);

        
        $__internal_46a76f99a88facd7a81a8c437ec84641b065fada79f8169a20a2f1bace89a67f->leave($__internal_46a76f99a88facd7a81a8c437ec84641b065fada79f8169a20a2f1bace89a67f_prof);

    }

    // line 21
    public function block_item($context, array $blocks = array())
    {
        $__internal_feff8899916ee98bb95e59b3c5c58e2bc6bc94a7b06660aafcd85950a38ceeea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_feff8899916ee98bb95e59b3c5c58e2bc6bc94a7b06660aafcd85950a38ceeea->enter($__internal_feff8899916ee98bb95e59b3c5c58e2bc6bc94a7b06660aafcd85950a38ceeea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        $__internal_a6a4ead966948ecac0e4ed971552aae5664483116b6e8b0e75177da8353466a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6a4ead966948ecac0e4ed971552aae5664483116b6e8b0e75177da8353466a1->enter($__internal_a6a4ead966948ecac0e4ed971552aae5664483116b6e8b0e75177da8353466a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        // line 22
        echo "    ";
        if (("edit" == twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 22, $this->getSourceContext()); })()), "attribute", array(0 => "type"), "method"))) {
            // line 23
            echo "        ";
            echo $context["buttons"]->macro_edit(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 23, $this->getSourceContext()); })()), "uri", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 23, $this->getSourceContext()); })()), "label", array()));
            echo "
    ";
        } elseif (("show" == twig_get_attribute($this->env, $this->getSourceContext(),         // line 24
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 24, $this->getSourceContext()); })()), "attribute", array(0 => "type"), "method"))) {
            // line 25
            echo "        ";
            echo $context["buttons"]->macro_show(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 25, $this->getSourceContext()); })()), "uri", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 25, $this->getSourceContext()); })()), "label", array()));
            echo "
    ";
        } elseif (("delete" == twig_get_attribute($this->env, $this->getSourceContext(),         // line 26
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 26, $this->getSourceContext()); })()), "attribute", array(0 => "type"), "method"))) {
            // line 27
            echo "        ";
            echo $context["buttons"]->macro_delete(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 27, $this->getSourceContext()); })()), "uri", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 27, $this->getSourceContext()); })()), "label", array())), true, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 27, $this->getSourceContext()); })()), "attribute", array(0 => "resource_id"), "method"));
            echo "
    ";
        } elseif (("transition" == twig_get_attribute($this->env, $this->getSourceContext(),         // line 28
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 28, $this->getSourceContext()); })()), "attribute", array(0 => "type"), "method"))) {
            // line 29
            echo "        ";
            $this->displayBlock("transition", $context, $blocks);
            echo "
    ";
        } else {
            // line 31
            echo "        ";
            $this->displayBlock("link", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_a6a4ead966948ecac0e4ed971552aae5664483116b6e8b0e75177da8353466a1->leave($__internal_a6a4ead966948ecac0e4ed971552aae5664483116b6e8b0e75177da8353466a1_prof);

        
        $__internal_feff8899916ee98bb95e59b3c5c58e2bc6bc94a7b06660aafcd85950a38ceeea->leave($__internal_feff8899916ee98bb95e59b3c5c58e2bc6bc94a7b06660aafcd85950a38ceeea_prof);

    }

    // line 35
    public function block_link($context, array $blocks = array())
    {
        $__internal_bbc161ff5fff4ae58b475d702a95f46635b4b5f00b096f6b24d9c13fd6b167c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbc161ff5fff4ae58b475d702a95f46635b4b5f00b096f6b24d9c13fd6b167c4->enter($__internal_bbc161ff5fff4ae58b475d702a95f46635b4b5f00b096f6b24d9c13fd6b167c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "link"));

        $__internal_368a2e82f4a4d23bb66bbc50c4129a0c1e5c4ea165a20144182b4644b1858598 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_368a2e82f4a4d23bb66bbc50c4129a0c1e5c4ea165a20144182b4644b1858598->enter($__internal_368a2e82f4a4d23bb66bbc50c4129a0c1e5c4ea165a20144182b4644b1858598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "link"));

        // line 36
        echo "    ";
        $context["color"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 36, $this->getSourceContext()); })()), "labelAttribute", array(0 => "color"), "method");
        // line 37
        echo "
    <a href=\"";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 38, $this->getSourceContext()); })()), "uri", array()), "html", null, true);
        echo "\" class=\"ui ";
        if ((isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new Twig_Error_Runtime('Variable "color" does not exist.', 38, $this->getSourceContext()); })())) {
            echo twig_escape_filter($this->env, (isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new Twig_Error_Runtime('Variable "color" does not exist.', 38, $this->getSourceContext()); })()), "html", null, true);
            echo " ";
        }
        echo "labeled icon button\">
        ";
        // line 39
        $this->displayBlock("icon", $context, $blocks);
        echo "
        ";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 40, $this->getSourceContext()); })()), "label", array())), "html", null, true);
        echo "
    </a>
";
        
        $__internal_368a2e82f4a4d23bb66bbc50c4129a0c1e5c4ea165a20144182b4644b1858598->leave($__internal_368a2e82f4a4d23bb66bbc50c4129a0c1e5c4ea165a20144182b4644b1858598_prof);

        
        $__internal_bbc161ff5fff4ae58b475d702a95f46635b4b5f00b096f6b24d9c13fd6b167c4->leave($__internal_bbc161ff5fff4ae58b475d702a95f46635b4b5f00b096f6b24d9c13fd6b167c4_prof);

    }

    // line 44
    public function block_transition($context, array $blocks = array())
    {
        $__internal_4c157c7cf3f6826221105b7ebcb5031d566f868fd3d5c099f508881af0455599 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c157c7cf3f6826221105b7ebcb5031d566f868fd3d5c099f508881af0455599->enter($__internal_4c157c7cf3f6826221105b7ebcb5031d566f868fd3d5c099f508881af0455599_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "transition"));

        $__internal_b1865be3b864df0974e4f83d2a7f9fb6f922d6e64be523feac2b52bad5f2fa9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1865be3b864df0974e4f83d2a7f9fb6f922d6e64be523feac2b52bad5f2fa9c->enter($__internal_b1865be3b864df0974e4f83d2a7f9fb6f922d6e64be523feac2b52bad5f2fa9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "transition"));

        // line 45
        echo "    ";
        $context["color"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 45, $this->getSourceContext()); })()), "labelAttribute", array(0 => "color"), "method");
        // line 46
        echo "
    <form action=\"";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 47, $this->getSourceContext()); })()), "uri", array()), "html", null, true);
        echo "\" method=\"post\" style=\"float: right;\">
        <input type=\"hidden\" name=\"_method\" value=\"PUT\">
        <button class=\"ui ";
        // line 49
        if ((isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new Twig_Error_Runtime('Variable "color" does not exist.', 49, $this->getSourceContext()); })())) {
            echo twig_escape_filter($this->env, (isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new Twig_Error_Runtime('Variable "color" does not exist.', 49, $this->getSourceContext()); })()), "html", null, true);
            echo " ";
        }
        echo "labeled icon loadable button\" type=\"submit\">
            ";
        // line 50
        $this->displayBlock("icon", $context, $blocks);
        echo "
            ";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 51, $this->getSourceContext()); })()), "label", array())), "html", null, true);
        echo "
        </button>
    </form>
";
        
        $__internal_b1865be3b864df0974e4f83d2a7f9fb6f922d6e64be523feac2b52bad5f2fa9c->leave($__internal_b1865be3b864df0974e4f83d2a7f9fb6f922d6e64be523feac2b52bad5f2fa9c_prof);

        
        $__internal_4c157c7cf3f6826221105b7ebcb5031d566f868fd3d5c099f508881af0455599->leave($__internal_4c157c7cf3f6826221105b7ebcb5031d566f868fd3d5c099f508881af0455599_prof);

    }

    // line 56
    public function block_icon($context, array $blocks = array())
    {
        $__internal_95d256e21370f53925253a594e515379c65be017e98335cf24a12b032b2942e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95d256e21370f53925253a594e515379c65be017e98335cf24a12b032b2942e1->enter($__internal_95d256e21370f53925253a594e515379c65be017e98335cf24a12b032b2942e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "icon"));

        $__internal_915911fe19e301da00fe12ad1ee0863b103e8caed32c58c9117031f5e1a94b85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_915911fe19e301da00fe12ad1ee0863b103e8caed32c58c9117031f5e1a94b85->enter($__internal_915911fe19e301da00fe12ad1ee0863b103e8caed32c58c9117031f5e1a94b85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "icon"));

        // line 57
        echo "    ";
        $context["icon"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 57, $this->getSourceContext()); })()), "labelAttribute", array(0 => "icon"), "method");
        // line 58
        echo "    ";
        if ((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new Twig_Error_Runtime('Variable "icon" does not exist.', 58, $this->getSourceContext()); })())) {
            echo "<i class=\"icon ";
            echo twig_escape_filter($this->env, (isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new Twig_Error_Runtime('Variable "icon" does not exist.', 58, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></i> ";
        }
        
        $__internal_915911fe19e301da00fe12ad1ee0863b103e8caed32c58c9117031f5e1a94b85->leave($__internal_915911fe19e301da00fe12ad1ee0863b103e8caed32c58c9117031f5e1a94b85_prof);

        
        $__internal_95d256e21370f53925253a594e515379c65be017e98335cf24a12b032b2942e1->leave($__internal_95d256e21370f53925253a594e515379c65be017e98335cf24a12b032b2942e1_prof);

    }

    public function getTemplateName()
    {
        return "SyliusUiBundle:Menu:top.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  292 => 58,  289 => 57,  280 => 56,  266 => 51,  262 => 50,  255 => 49,  250 => 47,  247 => 46,  244 => 45,  235 => 44,  222 => 40,  218 => 39,  209 => 38,  206 => 37,  203 => 36,  194 => 35,  180 => 31,  174 => 29,  172 => 28,  167 => 27,  165 => 26,  160 => 25,  158 => 24,  153 => 23,  150 => 22,  141 => 21,  130 => 18,  113 => 16,  96 => 15,  93 => 14,  84 => 13,  71 => 9,  63 => 8,  60 => 7,  57 => 6,  48 => 5,  38 => 1,  36 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'knp_menu.html.twig' %}

{% import '@SyliusUi/Macro/buttons.html.twig' as buttons %}

{% block root %}
    {% set id = item.extra('column_id') %}

    <div class=\"six wide right aligned column\"{% if id %} id=\"{{ id }}\"{% endif %}>
        {{ block('items') }}
    </div>
{% endblock %}

{% block items %}
    <div class=\"ui buttons\">
        {% for item in item.children %}
            {{ block('item') }}
        {% endfor %}
    </div>
{% endblock %}

{% block item %}
    {% if 'edit' == item.attribute('type') %}
        {{ buttons.edit(item.uri, item.label) }}
    {% elseif 'show' == item.attribute('type') %}
        {{ buttons.show(item.uri, item.label) }}
    {% elseif 'delete' == item.attribute('type') %}
        {{ buttons.delete(item.uri, item.label|trans, true, item.attribute('resource_id')) }}
    {% elseif 'transition' == item.attribute('type') %}
        {{ block('transition') }}
    {% else %}
        {{ block('link') }}
    {% endif %}
{% endblock %}

{% block link %}
    {% set color = item.labelAttribute('color') %}

    <a href=\"{{ item.uri }}\" class=\"ui {% if color %}{{ color }} {% endif %}labeled icon button\">
        {{ block('icon') }}
        {{ item.label|trans }}
    </a>
{% endblock %}

{% block transition %}
    {% set color = item.labelAttribute('color') %}

    <form action=\"{{ item.uri }}\" method=\"post\" style=\"float: right;\">
        <input type=\"hidden\" name=\"_method\" value=\"PUT\">
        <button class=\"ui {% if color %}{{ color }} {% endif %}labeled icon loadable button\" type=\"submit\">
            {{ block('icon') }}
            {{ item.label|trans }}
        </button>
    </form>
{% endblock %}

{% block icon %}
    {% set icon = item.labelAttribute('icon') %}
    {% if icon %}<i class=\"icon {{ icon }}\"></i> {% endif %}
{% endblock %}
", "SyliusUiBundle:Menu:top.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/views/Menu/top.html.twig");
    }
}
