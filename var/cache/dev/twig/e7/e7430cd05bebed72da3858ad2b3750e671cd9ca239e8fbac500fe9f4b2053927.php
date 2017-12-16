<?php

/* SonataBlockBundle:Block:block_base.html.twig */
class __TwigTemplate_fe293eda9f38ed97c258d99100f3effcfd7836dd907aab51b435574a9b427d1f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0211697c81b4a77e8dd4f7769cbae3ff27b81628c1ff518d5843fd2add513bcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0211697c81b4a77e8dd4f7769cbae3ff27b81628c1ff518d5843fd2add513bcc->enter($__internal_0211697c81b4a77e8dd4f7769cbae3ff27b81628c1ff518d5843fd2add513bcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

        $__internal_1aa1dfceb7c4ae7042b064f1f56bae2be7d7e2fbde7fc4e40fd3580f5c21b31e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1aa1dfceb7c4ae7042b064f1f56bae2be7d7e2fbde7fc4e40fd3580f5c21b31e->enter($__internal_1aa1dfceb7c4ae7042b064f1f56bae2be7d7e2fbde7fc4e40fd3580f5c21b31e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

        // line 11
        echo "<div id=\"cms-block-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["block"]) || array_key_exists("block", $context) ? $context["block"] : (function () { throw new Twig_Error_Runtime('Variable "block" does not exist.', 11, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo "\" class=\"cms-block cms-block-element\">
    ";
        // line 12
        $this->displayBlock('block', $context, $blocks);
        // line 13
        echo "</div>
";
        
        $__internal_0211697c81b4a77e8dd4f7769cbae3ff27b81628c1ff518d5843fd2add513bcc->leave($__internal_0211697c81b4a77e8dd4f7769cbae3ff27b81628c1ff518d5843fd2add513bcc_prof);

        
        $__internal_1aa1dfceb7c4ae7042b064f1f56bae2be7d7e2fbde7fc4e40fd3580f5c21b31e->leave($__internal_1aa1dfceb7c4ae7042b064f1f56bae2be7d7e2fbde7fc4e40fd3580f5c21b31e_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_6173ae107a443a9aef88592031ca13804b9a6a7b7bd7ab6d3030229a60fede50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6173ae107a443a9aef88592031ca13804b9a6a7b7bd7ab6d3030229a60fede50->enter($__internal_6173ae107a443a9aef88592031ca13804b9a6a7b7bd7ab6d3030229a60fede50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_826fd8fa4356ea99afdc99199720e10ade8dfbabff1b638876e8025b4658f60f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_826fd8fa4356ea99afdc99199720e10ade8dfbabff1b638876e8025b4658f60f->enter($__internal_826fd8fa4356ea99afdc99199720e10ade8dfbabff1b638876e8025b4658f60f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_826fd8fa4356ea99afdc99199720e10ade8dfbabff1b638876e8025b4658f60f->leave($__internal_826fd8fa4356ea99afdc99199720e10ade8dfbabff1b638876e8025b4658f60f_prof);

        
        $__internal_6173ae107a443a9aef88592031ca13804b9a6a7b7bd7ab6d3030229a60fede50->leave($__internal_6173ae107a443a9aef88592031ca13804b9a6a7b7bd7ab6d3030229a60fede50_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 12,  33 => 13,  31 => 12,  26 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}
<div id=\"cms-block-{{ block.id }}\" class=\"cms-block cms-block-element\">
    {% block block %}EMPTY CONTENT{% endblock %}
</div>
", "SonataBlockBundle:Block:block_base.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sonata-project\\block-bundle/Resources/views/Block/block_base.html.twig");
    }
}
