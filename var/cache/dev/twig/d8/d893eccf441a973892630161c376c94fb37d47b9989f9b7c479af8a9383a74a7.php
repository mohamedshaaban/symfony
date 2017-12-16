<?php

/* SyliusAdminBundle:ProductVariant/Grid/Field:position.html.twig */
class __TwigTemplate_f4233e4b2c8c288e3f53bd2c8cd65100d4b5594005e6436126c0dd0914f59312 extends Twig_Template
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
        $__internal_e1cf71196c84862e78fe49f437f493b7da93a3e2d2ddd1b53ec6dbd481763bcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1cf71196c84862e78fe49f437f493b7da93a3e2d2ddd1b53ec6dbd481763bcb->enter($__internal_e1cf71196c84862e78fe49f437f493b7da93a3e2d2ddd1b53ec6dbd481763bcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductVariant/Grid/Field:position.html.twig"));

        $__internal_5c33ed4013b6c309fb80f5c32698e262d2813479ab549438ba1b644aebea1942 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c33ed4013b6c309fb80f5c32698e262d2813479ab549438ba1b644aebea1942->enter($__internal_5c33ed4013b6c309fb80f5c32698e262d2813479ab549438ba1b644aebea1942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductVariant/Grid/Field:position.html.twig"));

        // line 1
        echo "<div style=\"width: 100%; text-align: center;\">
    <div class=\"ui input position\" style=\"width: 50px;\">
        <input type='text' value=\"";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 3, $this->getSourceContext()); })()), "position", array()), "html", null, true);
        echo "\" data-id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 3, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo "\" class=\"sylius-product-variant-position\" style=\"text-align: center;\" />
    </div>
</div>
";
        
        $__internal_e1cf71196c84862e78fe49f437f493b7da93a3e2d2ddd1b53ec6dbd481763bcb->leave($__internal_e1cf71196c84862e78fe49f437f493b7da93a3e2d2ddd1b53ec6dbd481763bcb_prof);

        
        $__internal_5c33ed4013b6c309fb80f5c32698e262d2813479ab549438ba1b644aebea1942->leave($__internal_5c33ed4013b6c309fb80f5c32698e262d2813479ab549438ba1b644aebea1942_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:ProductVariant/Grid/Field:position.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div style=\"width: 100%; text-align: center;\">
    <div class=\"ui input position\" style=\"width: 50px;\">
        <input type='text' value=\"{{ data.position }}\" data-id=\"{{ data.id }}\" class=\"sylius-product-variant-position\" style=\"text-align: center;\" />
    </div>
</div>
", "SyliusAdminBundle:ProductVariant/Grid/Field:position.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/ProductVariant/Grid/Field/position.html.twig");
    }
}
