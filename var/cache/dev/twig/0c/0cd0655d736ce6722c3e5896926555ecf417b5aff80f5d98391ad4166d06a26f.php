<?php

/* SyliusAdminBundle:Product/Grid/Field:image.html.twig */
class __TwigTemplate_43c044518a47f80ee8b697f08f06e3ac6ef79965f97e97dca6cb341f127ef37e extends Twig_Template
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
        $__internal_746b4eac1889c63683693eca8d9bd3a490f646df14c4b530388a1d209b956e78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_746b4eac1889c63683693eca8d9bd3a490f646df14c4b530388a1d209b956e78->enter($__internal_746b4eac1889c63683693eca8d9bd3a490f646df14c4b530388a1d209b956e78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Product/Grid/Field:image.html.twig"));

        $__internal_4348d41ae8112795fac469f1e2ebfc6a02859b05b13753bef0151a9f9b6a51c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4348d41ae8112795fac469f1e2ebfc6a02859b05b13753bef0151a9f9b6a51c0->enter($__internal_4348d41ae8112795fac469f1e2ebfc6a02859b05b13753bef0151a9f9b6a51c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Product/Grid/Field:image.html.twig"));

        // line 1
        $this->loadTemplate("@SyliusAdmin/Product/_mainImage.html.twig", "SyliusAdminBundle:Product/Grid/Field:image.html.twig", 1)->display(array_merge($context, array("product" => (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 1, $this->getSourceContext()); })()))));
        
        $__internal_746b4eac1889c63683693eca8d9bd3a490f646df14c4b530388a1d209b956e78->leave($__internal_746b4eac1889c63683693eca8d9bd3a490f646df14c4b530388a1d209b956e78_prof);

        
        $__internal_4348d41ae8112795fac469f1e2ebfc6a02859b05b13753bef0151a9f9b6a51c0->leave($__internal_4348d41ae8112795fac469f1e2ebfc6a02859b05b13753bef0151a9f9b6a51c0_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Product/Grid/Field:image.html.twig";
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
        return new Twig_Source("{% include '@SyliusAdmin/Product/_mainImage.html.twig' with {'product': data} %}
", "SyliusAdminBundle:Product/Grid/Field:image.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Product/Grid/Field/image.html.twig");
    }
}
