<?php

/* SonataBlockBundle:Block:block_template.html.twig */
class __TwigTemplate_55328be646d9af121905ce7103fd753f17dd58198db36f7cc290b31ba6c6517d extends Twig_Template
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
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_block"]) || array_key_exists("sonata_block", $context) ? $context["sonata_block"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_block" does not exist.', 12, $this->getSourceContext()); })()), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_template.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b5d0e19fe9ae8af8a48705a8b4247b6208f0557c9c87b5d32f26c31afbbd71e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5d0e19fe9ae8af8a48705a8b4247b6208f0557c9c87b5d32f26c31afbbd71e4->enter($__internal_b5d0e19fe9ae8af8a48705a8b4247b6208f0557c9c87b5d32f26c31afbbd71e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_template.html.twig"));

        $__internal_96d86722b87f681e996909e48f66cb0ac4a3719fddb26a292d4bc6bc59f6b785 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96d86722b87f681e996909e48f66cb0ac4a3719fddb26a292d4bc6bc59f6b785->enter($__internal_96d86722b87f681e996909e48f66cb0ac4a3719fddb26a292d4bc6bc59f6b785_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_template.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5d0e19fe9ae8af8a48705a8b4247b6208f0557c9c87b5d32f26c31afbbd71e4->leave($__internal_b5d0e19fe9ae8af8a48705a8b4247b6208f0557c9c87b5d32f26c31afbbd71e4_prof);

        
        $__internal_96d86722b87f681e996909e48f66cb0ac4a3719fddb26a292d4bc6bc59f6b785->leave($__internal_96d86722b87f681e996909e48f66cb0ac4a3719fddb26a292d4bc6bc59f6b785_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_94822c7d7346123acf2475db826b85e2f2d065829c08d8d35e4054a4decea38d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94822c7d7346123acf2475db826b85e2f2d065829c08d8d35e4054a4decea38d->enter($__internal_94822c7d7346123acf2475db826b85e2f2d065829c08d8d35e4054a4decea38d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_984431479fcb3069b3e96c32d2487187eacb02ea097afbfc34fbc38821b9799a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_984431479fcb3069b3e96c32d2487187eacb02ea097afbfc34fbc38821b9799a->enter($__internal_984431479fcb3069b3e96c32d2487187eacb02ea097afbfc34fbc38821b9799a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    <h3>Sonata Block Template</h3>
    If you want to use the <code>sonata.block.template</code> block type, you need to create a template :

    <pre>";
        // line 33
        echo "{# file: 'MyBundle:Block:my_block_feature_1.html.twig' #}
{% extends sonata_block.templates.block_base %}

{% block block %}
    &lt;h3&gt;The block title&lt;/h3&gt;
    &lt;p&gt;
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel turpis at lacus
        vehicula fringilla at eu lectus. Duis vitae arcu congue, porttitor nisi sit amet,
        mattis metus. Nunc mollis elit ut lectus cursus luctus. Aliquam eu magna sit amet
        massa volutpat auctor.
    &lt;/p&gt;
{% endblock %}";
        echo "</pre>

    And then call it from a template with the <code>sonata_block_render</code> helper:

    <pre>";
        // line 43
        echo "{{ sonata_block_render({ 'type': 'sonata.block.service.template' }, {
    'template': 'MyBundle:Block:my_block_feature_1.html.twig',
}) }}";
        echo "</pre>
";
        
        $__internal_984431479fcb3069b3e96c32d2487187eacb02ea097afbfc34fbc38821b9799a->leave($__internal_984431479fcb3069b3e96c32d2487187eacb02ea097afbfc34fbc38821b9799a_prof);

        
        $__internal_94822c7d7346123acf2475db826b85e2f2d065829c08d8d35e4054a4decea38d->leave($__internal_94822c7d7346123acf2475db826b85e2f2d065829c08d8d35e4054a4decea38d_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 43,  53 => 33,  48 => 15,  39 => 14,  18 => 12,);
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
    <h3>Sonata Block Template</h3>
    If you want to use the <code>sonata.block.template</code> block type, you need to create a template :

    <pre>
        {%- verbatim -%}
{# file: 'MyBundle:Block:my_block_feature_1.html.twig' #}
{% extends sonata_block.templates.block_base %}

{% block block %}
    &lt;h3&gt;The block title&lt;/h3&gt;
    &lt;p&gt;
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel turpis at lacus
        vehicula fringilla at eu lectus. Duis vitae arcu congue, porttitor nisi sit amet,
        mattis metus. Nunc mollis elit ut lectus cursus luctus. Aliquam eu magna sit amet
        massa volutpat auctor.
    &lt;/p&gt;
{% endblock %}
        {%- endverbatim -%}
    </pre>

    And then call it from a template with the <code>sonata_block_render</code> helper:

    <pre>
{%- verbatim -%}
{{ sonata_block_render({ 'type': 'sonata.block.service.template' }, {
    'template': 'MyBundle:Block:my_block_feature_1.html.twig',
}) }}
{%- endverbatim -%}
    </pre>
{% endblock %}
", "SonataBlockBundle:Block:block_template.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sonata-project\\block-bundle/Resources/views/Block/block_template.html.twig");
    }
}
