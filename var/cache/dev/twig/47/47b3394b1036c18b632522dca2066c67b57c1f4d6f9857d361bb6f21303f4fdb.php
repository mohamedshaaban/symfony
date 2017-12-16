<?php

/* SyliusAdminBundle:ProductReview/Label/Status:rejected.html.twig */
class __TwigTemplate_c89455500a903fe4c6236b8661328139a958434f34e2a0ca156c4203bbaa2d8a extends Twig_Template
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
        $__internal_326a696509a57d84ef2e76474978349b86e7d778fefd0643dec191a5bb068e10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_326a696509a57d84ef2e76474978349b86e7d778fefd0643dec191a5bb068e10->enter($__internal_326a696509a57d84ef2e76474978349b86e7d778fefd0643dec191a5bb068e10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductReview/Label/Status:rejected.html.twig"));

        $__internal_cd5b24adf9ec394243859b78984bbded53c25b222f6c99802cf37606b737e882 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd5b24adf9ec394243859b78984bbded53c25b222f6c99802cf37606b737e882->enter($__internal_cd5b24adf9ec394243859b78984bbded53c25b222f6c99802cf37606b737e882_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductReview/Label/Status:rejected.html.twig"));

        // line 1
        echo "<span class=\"ui yellow label\">
    <i class=\"ban icon\"></i>
    ";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 3, $this->getSourceContext()); })())), "html", null, true);
        echo "
</span>
";
        
        $__internal_326a696509a57d84ef2e76474978349b86e7d778fefd0643dec191a5bb068e10->leave($__internal_326a696509a57d84ef2e76474978349b86e7d778fefd0643dec191a5bb068e10_prof);

        
        $__internal_cd5b24adf9ec394243859b78984bbded53c25b222f6c99802cf37606b737e882->leave($__internal_cd5b24adf9ec394243859b78984bbded53c25b222f6c99802cf37606b737e882_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:ProductReview/Label/Status:rejected.html.twig";
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
        return new Twig_Source("<span class=\"ui yellow label\">
    <i class=\"ban icon\"></i>
    {{ value|trans }}
</span>
", "SyliusAdminBundle:ProductReview/Label/Status:rejected.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/ProductReview/Label/Status/rejected.html.twig");
    }
}
