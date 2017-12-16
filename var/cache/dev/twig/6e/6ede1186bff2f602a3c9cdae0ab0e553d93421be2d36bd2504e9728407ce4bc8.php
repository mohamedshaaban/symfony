<?php

/* @SyliusAdmin/Product/Grid/Field/mainTaxon.html.twig */
class __TwigTemplate_11a423cad79fb997c4807e2ded303b6b6c49241c2f48668562e63312f0272bf1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_be7c699609a4155ebaa3740bcdc30d0b4c196e0e862bdec1cb3de5d51a157c79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be7c699609a4155ebaa3740bcdc30d0b4c196e0e862bdec1cb3de5d51a157c79->enter($__internal_be7c699609a4155ebaa3740bcdc30d0b4c196e0e862bdec1cb3de5d51a157c79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/Product/Grid/Field/mainTaxon.html.twig"));

        $__internal_e5aacd8a15eea9d4f3deda79f8f790a459d60a0b466eb3e5ad5fddf6bfa49c59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5aacd8a15eea9d4f3deda79f8f790a459d60a0b466eb3e5ad5fddf6bfa49c59->enter($__internal_e5aacd8a15eea9d4f3deda79f8f790a459d60a0b466eb3e5ad5fddf6bfa49c59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/Product/Grid/Field/mainTaxon.html.twig"));

        // line 1
        if ( !(null === (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 1, $this->getSourceContext()); })()))) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 1, $this->getSourceContext()); })()), "name", array()), "html", null, true);
        }
        
        $__internal_be7c699609a4155ebaa3740bcdc30d0b4c196e0e862bdec1cb3de5d51a157c79->leave($__internal_be7c699609a4155ebaa3740bcdc30d0b4c196e0e862bdec1cb3de5d51a157c79_prof);

        
        $__internal_e5aacd8a15eea9d4f3deda79f8f790a459d60a0b466eb3e5ad5fddf6bfa49c59->leave($__internal_e5aacd8a15eea9d4f3deda79f8f790a459d60a0b466eb3e5ad5fddf6bfa49c59_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Product/Grid/Field/mainTaxon.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if data is not null %}{{ data.name }}{% endif %}
", "@SyliusAdmin/Product/Grid/Field/mainTaxon.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle\\Resources\\views\\Product\\Grid\\Field\\mainTaxon.html.twig");
    }
}
