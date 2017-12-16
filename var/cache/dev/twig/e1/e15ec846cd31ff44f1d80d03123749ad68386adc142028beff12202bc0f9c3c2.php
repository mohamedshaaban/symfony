<?php

/* SyliusAdminBundle:ProductReview:_author.html.twig */
class __TwigTemplate_ab75a4468d220aa66532136424e79476af7ac4e1c792abc7b5f0102574493909 extends Twig_Template
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
        $__internal_4e746fc22a4f732f0f288ac2b84579e2dcb4c1282358ce9f40d1c9b0944eb2f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e746fc22a4f732f0f288ac2b84579e2dcb4c1282358ce9f40d1c9b0944eb2f7->enter($__internal_4e746fc22a4f732f0f288ac2b84579e2dcb4c1282358ce9f40d1c9b0944eb2f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductReview:_author.html.twig"));

        $__internal_a8965621501700f4112d7f2933e10d5c5a22266e3d0642fc6c51853b2a7c1037 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8965621501700f4112d7f2933e10d5c5a22266e3d0642fc6c51853b2a7c1037->enter($__internal_a8965621501700f4112d7f2933e10d5c5a22266e3d0642fc6c51853b2a7c1037_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductReview:_author.html.twig"));

        // line 1
        $this->loadTemplate("@SyliusAdmin/Customer/_info.html.twig", "SyliusAdminBundle:ProductReview:_author.html.twig", 1)->display(array_merge($context, array("customer" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["product_review"]) || array_key_exists("product_review", $context) ? $context["product_review"] : (function () { throw new Twig_Error_Runtime('Variable "product_review" does not exist.', 1, $this->getSourceContext()); })()), "author", array()))));
        
        $__internal_4e746fc22a4f732f0f288ac2b84579e2dcb4c1282358ce9f40d1c9b0944eb2f7->leave($__internal_4e746fc22a4f732f0f288ac2b84579e2dcb4c1282358ce9f40d1c9b0944eb2f7_prof);

        
        $__internal_a8965621501700f4112d7f2933e10d5c5a22266e3d0642fc6c51853b2a7c1037->leave($__internal_a8965621501700f4112d7f2933e10d5c5a22266e3d0642fc6c51853b2a7c1037_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:ProductReview:_author.html.twig";
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
        return new Twig_Source("{% include '@SyliusAdmin/Customer/_info.html.twig' with {'customer': product_review.author} %}
", "SyliusAdminBundle:ProductReview:_author.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/ProductReview/_author.html.twig");
    }
}
