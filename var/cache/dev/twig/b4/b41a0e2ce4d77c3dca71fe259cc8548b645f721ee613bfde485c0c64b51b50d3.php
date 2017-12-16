<?php

/* SonataBlockBundle:Block:block_core_text.html.twig */
class __TwigTemplate_30c58e070dbcac324f75e713a8f8e220c8157a0195542fb42e54db97235d1bbc extends Twig_Template
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
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_block"]) || array_key_exists("sonata_block", $context) ? $context["sonata_block"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_block" does not exist.', 12, $this->getSourceContext()); })()), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_18e85b7db0e90ce1a5213447f6abfe05be526649f220456bc37b49fb14404b59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18e85b7db0e90ce1a5213447f6abfe05be526649f220456bc37b49fb14404b59->enter($__internal_18e85b7db0e90ce1a5213447f6abfe05be526649f220456bc37b49fb14404b59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_text.html.twig"));

        $__internal_be334e3681413df8fd59418f7ac7b031bb03d213613e795909cd40bfeb53fd18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be334e3681413df8fd59418f7ac7b031bb03d213613e795909cd40bfeb53fd18->enter($__internal_be334e3681413df8fd59418f7ac7b031bb03d213613e795909cd40bfeb53fd18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_18e85b7db0e90ce1a5213447f6abfe05be526649f220456bc37b49fb14404b59->leave($__internal_18e85b7db0e90ce1a5213447f6abfe05be526649f220456bc37b49fb14404b59_prof);

        
        $__internal_be334e3681413df8fd59418f7ac7b031bb03d213613e795909cd40bfeb53fd18->leave($__internal_be334e3681413df8fd59418f7ac7b031bb03d213613e795909cd40bfeb53fd18_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_8bf49ee16ee7db7766e8a77d2482232284cc2be24011b08a5bb84dce5acbd551 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bf49ee16ee7db7766e8a77d2482232284cc2be24011b08a5bb84dce5acbd551->enter($__internal_8bf49ee16ee7db7766e8a77d2482232284cc2be24011b08a5bb84dce5acbd551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_e79528a526ecaf1df3bab36ed145cd683d54063d479e9bd036684036aa025b64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e79528a526ecaf1df3bab36ed145cd683d54063d479e9bd036684036aa025b64->enter($__internal_e79528a526ecaf1df3bab36ed145cd683d54063d479e9bd036684036aa025b64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new Twig_Error_Runtime('Variable "settings" does not exist.', 15, $this->getSourceContext()); })()), "content", array());
        echo "
";
        
        $__internal_e79528a526ecaf1df3bab36ed145cd683d54063d479e9bd036684036aa025b64->leave($__internal_e79528a526ecaf1df3bab36ed145cd683d54063d479e9bd036684036aa025b64_prof);

        
        $__internal_8bf49ee16ee7db7766e8a77d2482232284cc2be24011b08a5bb84dce5acbd551->leave($__internal_8bf49ee16ee7db7766e8a77d2482232284cc2be24011b08a5bb84dce5acbd551_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_text.html.twig";
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
    {{ settings.content|raw }}
{% endblock %}
", "SonataBlockBundle:Block:block_core_text.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sonata-project\\block-bundle/Resources/views/Block/block_core_text.html.twig");
    }
}
