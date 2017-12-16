<?php

/* SonataBlockBundle:Block:block_exception.html.twig */
class __TwigTemplate_f54c65c230e7b239890b27406a92a26471ee3df0bebc78634fb920c2f03dbf7d extends Twig_Template
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
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_block"]) || array_key_exists("sonata_block", $context) ? $context["sonata_block"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_block" does not exist.', 12, $this->getSourceContext()); })()), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_exception.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_40eca35dd6944e7341a79fdb998ea50661512dd32b0e7bcfc0ff2f34ea5ee6c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40eca35dd6944e7341a79fdb998ea50661512dd32b0e7bcfc0ff2f34ea5ee6c9->enter($__internal_40eca35dd6944e7341a79fdb998ea50661512dd32b0e7bcfc0ff2f34ea5ee6c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_exception.html.twig"));

        $__internal_32753278468952aa71bcd3046eda3b461c3198c1afa53abb4419af8391cefc53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32753278468952aa71bcd3046eda3b461c3198c1afa53abb4419af8391cefc53->enter($__internal_32753278468952aa71bcd3046eda3b461c3198c1afa53abb4419af8391cefc53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_exception.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_40eca35dd6944e7341a79fdb998ea50661512dd32b0e7bcfc0ff2f34ea5ee6c9->leave($__internal_40eca35dd6944e7341a79fdb998ea50661512dd32b0e7bcfc0ff2f34ea5ee6c9_prof);

        
        $__internal_32753278468952aa71bcd3046eda3b461c3198c1afa53abb4419af8391cefc53->leave($__internal_32753278468952aa71bcd3046eda3b461c3198c1afa53abb4419af8391cefc53_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_b202e49b87847d9a718a499d0c201580c42cb6dae491b17064aa3cec8024f7a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b202e49b87847d9a718a499d0c201580c42cb6dae491b17064aa3cec8024f7a6->enter($__internal_b202e49b87847d9a718a499d0c201580c42cb6dae491b17064aa3cec8024f7a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_d0848d3b1dbeef11d52dd6eb5992b0e411b01735a3b26c3943e2141ce8b942ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0848d3b1dbeef11d52dd6eb5992b0e411b01735a3b26c3943e2141ce8b942ad->enter($__internal_d0848d3b1dbeef11d52dd6eb5992b0e411b01735a3b26c3943e2141ce8b942ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    <div class=\"cms-block-exception\">
        <h2>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["block"]) || array_key_exists("block", $context) ? $context["block"] : (function () { throw new Twig_Error_Runtime('Variable "block" does not exist.', 16, $this->getSourceContext()); })()), "name", array()), "html", null, true);
        echo "</h2>
        <h3>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 17, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo "</h3>
    </div>
";
        
        $__internal_d0848d3b1dbeef11d52dd6eb5992b0e411b01735a3b26c3943e2141ce8b942ad->leave($__internal_d0848d3b1dbeef11d52dd6eb5992b0e411b01735a3b26c3943e2141ce8b942ad_prof);

        
        $__internal_b202e49b87847d9a718a499d0c201580c42cb6dae491b17064aa3cec8024f7a6->leave($__internal_b202e49b87847d9a718a499d0c201580c42cb6dae491b17064aa3cec8024f7a6_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 17,  51 => 16,  48 => 15,  39 => 14,  18 => 12,);
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
    <div class=\"cms-block-exception\">
        <h2>{{ block.name }}</h2>
        <h3>{{ exception.message }}</h3>
    </div>
{% endblock %}
", "SonataBlockBundle:Block:block_exception.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sonata-project\\block-bundle/Resources/views/Block/block_exception.html.twig");
    }
}
