<?php

/* SonataBlockBundle:Block:block_exception_debug.html.twig */
class __TwigTemplate_f09f48a4b935270249d9b7f49954900c3164d365137e62ad33fb24657456e63b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_block"]) || array_key_exists("sonata_block", $context) ? $context["sonata_block"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_block" does not exist.', 12, $this->getSourceContext()); })()), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_exception_debug.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_574b44dde50f10eb37b3b2e66bc91049a4619b044493b47da60d2587549637c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_574b44dde50f10eb37b3b2e66bc91049a4619b044493b47da60d2587549637c1->enter($__internal_574b44dde50f10eb37b3b2e66bc91049a4619b044493b47da60d2587549637c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_exception_debug.html.twig"));

        $__internal_26c04214a29dbd6d182ab189d614f4354c5c01764abd008a29521ad5ab73a5b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26c04214a29dbd6d182ab189d614f4354c5c01764abd008a29521ad5ab73a5b8->enter($__internal_26c04214a29dbd6d182ab189d614f4354c5c01764abd008a29521ad5ab73a5b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_exception_debug.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_574b44dde50f10eb37b3b2e66bc91049a4619b044493b47da60d2587549637c1->leave($__internal_574b44dde50f10eb37b3b2e66bc91049a4619b044493b47da60d2587549637c1_prof);

        
        $__internal_26c04214a29dbd6d182ab189d614f4354c5c01764abd008a29521ad5ab73a5b8->leave($__internal_26c04214a29dbd6d182ab189d614f4354c5c01764abd008a29521ad5ab73a5b8_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_bfdeb885809f0a0588ebf19b182cb62a6175b0368dd72acb627dd3095d3b2fb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfdeb885809f0a0588ebf19b182cb62a6175b0368dd72acb627dd3095d3b2fb8->enter($__internal_bfdeb885809f0a0588ebf19b182cb62a6175b0368dd72acb627dd3095d3b2fb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_031d9bf309c6cc1a329dabf721bc5c082cf8881bb22bae7982d2980754d74bf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_031d9bf309c6cc1a329dabf721bc5c082cf8881bb22bae7982d2980754d74bf9->enter($__internal_031d9bf309c6cc1a329dabf721bc5c082cf8881bb22bae7982d2980754d74bf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    <div class=\"cms-block-exception\" ";
        if ((isset($context["forceStyle"]) || array_key_exists("forceStyle", $context) ? $context["forceStyle"] : (function () { throw new Twig_Error_Runtime('Variable "forceStyle" does not exist.', 15, $this->getSourceContext()); })())) {
            echo "style=\"overflow-y: scroll; min-width: 300px; max-height: 300px;\"";
        }
        echo ">

        ";
        // line 18
        echo "        ";
        if ((isset($context["forceStyle"]) || array_key_exists("forceStyle", $context) ? $context["forceStyle"] : (function () { throw new Twig_Error_Runtime('Variable "forceStyle" does not exist.', 18, $this->getSourceContext()); })())) {
            // line 19
            echo "            <link href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception_layout.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
            <link href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
        ";
        }
        // line 22
        echo "        ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "SonataBlockBundle:Block:block_exception_debug.html.twig", 22)->display($context);
        // line 23
        echo "    </div>
";
        
        $__internal_031d9bf309c6cc1a329dabf721bc5c082cf8881bb22bae7982d2980754d74bf9->leave($__internal_031d9bf309c6cc1a329dabf721bc5c082cf8881bb22bae7982d2980754d74bf9_prof);

        
        $__internal_bfdeb885809f0a0588ebf19b182cb62a6175b0368dd72acb627dd3095d3b2fb8->leave($__internal_bfdeb885809f0a0588ebf19b182cb62a6175b0368dd72acb627dd3095d3b2fb8_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_exception_debug.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 23,  69 => 22,  64 => 20,  59 => 19,  56 => 18,  48 => 15,  39 => 14,  18 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends sonata_block.templates.block_base %}

{% block block %}
    <div class=\"cms-block-exception\" {% if forceStyle %}style=\"overflow-y: scroll; min-width: 300px; max-height: 300px;\"{% endif %}>

        {# this is dirty but the alternative would require a new block-optimized exception css #}
        {% if forceStyle %}
            <link href=\"{{ asset('bundles/framework/css/exception_layout.css') }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
            <link href=\"{{ asset('bundles/framework/css/exception.css') }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
        {% endif %}
        {% include 'TwigBundle:Exception:exception.html.twig' %}
    </div>
{% endblock %}
", "SonataBlockBundle:Block:block_exception_debug.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sonata-project\\block-bundle/Resources/views/Block/block_exception_debug.html.twig");
    }
}
