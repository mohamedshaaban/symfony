<?php

/* SonataBlockBundle:Block:block_core_menu.html.twig */
class __TwigTemplate_66d91dcfc54a2ff34a065b4216713fbe305ed1f0e58dc0adb82d427d3e7fbee8 extends Twig_Template
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
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_block"]) || array_key_exists("sonata_block", $context) ? $context["sonata_block"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_block" does not exist.', 12, $this->getSourceContext()); })()), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_menu.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4ffe001f1dcb3df389666bf95a340da9b01d892929299eedfb89c38c76b42d49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ffe001f1dcb3df389666bf95a340da9b01d892929299eedfb89c38c76b42d49->enter($__internal_4ffe001f1dcb3df389666bf95a340da9b01d892929299eedfb89c38c76b42d49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_menu.html.twig"));

        $__internal_75d8a882bbd56732ad3bb72309887f86435ab67c0f266e6277f33f6109c9ca5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75d8a882bbd56732ad3bb72309887f86435ab67c0f266e6277f33f6109c9ca5e->enter($__internal_75d8a882bbd56732ad3bb72309887f86435ab67c0f266e6277f33f6109c9ca5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_menu.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ffe001f1dcb3df389666bf95a340da9b01d892929299eedfb89c38c76b42d49->leave($__internal_4ffe001f1dcb3df389666bf95a340da9b01d892929299eedfb89c38c76b42d49_prof);

        
        $__internal_75d8a882bbd56732ad3bb72309887f86435ab67c0f266e6277f33f6109c9ca5e->leave($__internal_75d8a882bbd56732ad3bb72309887f86435ab67c0f266e6277f33f6109c9ca5e_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_3cdf6365373b5a648c20dcdda1c9ae306cfdc637d768e7188e2bee307a8fec36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cdf6365373b5a648c20dcdda1c9ae306cfdc637d768e7188e2bee307a8fec36->enter($__internal_3cdf6365373b5a648c20dcdda1c9ae306cfdc637d768e7188e2bee307a8fec36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_a9fb608ffc82b805969669ffebc005ab145365eb31cf326392980e0c4b46a88c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9fb608ffc82b805969669ffebc005ab145365eb31cf326392980e0c4b46a88c->enter($__internal_a9fb608ffc82b805969669ffebc005ab145365eb31cf326392980e0c4b46a88c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render((isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new Twig_Error_Runtime('Variable "menu" does not exist.', 15, $this->getSourceContext()); })()), (isset($context["menu_options"]) || array_key_exists("menu_options", $context) ? $context["menu_options"] : (function () { throw new Twig_Error_Runtime('Variable "menu_options" does not exist.', 15, $this->getSourceContext()); })()));
        echo "
";
        
        $__internal_a9fb608ffc82b805969669ffebc005ab145365eb31cf326392980e0c4b46a88c->leave($__internal_a9fb608ffc82b805969669ffebc005ab145365eb31cf326392980e0c4b46a88c_prof);

        
        $__internal_3cdf6365373b5a648c20dcdda1c9ae306cfdc637d768e7188e2bee307a8fec36->leave($__internal_3cdf6365373b5a648c20dcdda1c9ae306cfdc637d768e7188e2bee307a8fec36_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 15,  39 => 14,  18 => 12,);
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
    {{ knp_menu_render(menu, menu_options) }}
{% endblock %}
", "SonataBlockBundle:Block:block_core_menu.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sonata-project\\block-bundle/Resources/views/Block/block_core_menu.html.twig");
    }
}
