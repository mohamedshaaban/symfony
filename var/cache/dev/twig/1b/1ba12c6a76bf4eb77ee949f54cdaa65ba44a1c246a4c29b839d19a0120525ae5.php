<?php

/* SyliusAdminBundle:ProductReview/Label/Status:new.html.twig */
class __TwigTemplate_fb2db333bf49338bcfacfcacf709134dffbc3131d6b1291b1cfef58c01fe9753 extends Twig_Template
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
        $__internal_de84164fb72c60be10ecdcf65a5209d1daa5d113ae7bffa1be0d671be599adca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de84164fb72c60be10ecdcf65a5209d1daa5d113ae7bffa1be0d671be599adca->enter($__internal_de84164fb72c60be10ecdcf65a5209d1daa5d113ae7bffa1be0d671be599adca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductReview/Label/Status:new.html.twig"));

        $__internal_17bd3dc13a931643ed5b6a2f63bd34ce12929996ad41faea295340f305c73853 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17bd3dc13a931643ed5b6a2f63bd34ce12929996ad41faea295340f305c73853->enter($__internal_17bd3dc13a931643ed5b6a2f63bd34ce12929996ad41faea295340f305c73853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductReview/Label/Status:new.html.twig"));

        // line 1
        echo "<span class=\"ui blue label\">
    <i class=\"inbox icon\"></i>
    ";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 3, $this->getSourceContext()); })())), "html", null, true);
        echo "
</span>
";
        
        $__internal_de84164fb72c60be10ecdcf65a5209d1daa5d113ae7bffa1be0d671be599adca->leave($__internal_de84164fb72c60be10ecdcf65a5209d1daa5d113ae7bffa1be0d671be599adca_prof);

        
        $__internal_17bd3dc13a931643ed5b6a2f63bd34ce12929996ad41faea295340f305c73853->leave($__internal_17bd3dc13a931643ed5b6a2f63bd34ce12929996ad41faea295340f305c73853_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:ProductReview/Label/Status:new.html.twig";
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
        return new Twig_Source("<span class=\"ui blue label\">
    <i class=\"inbox icon\"></i>
    {{ value|trans }}
</span>
", "SyliusAdminBundle:ProductReview/Label/Status:new.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/ProductReview/Label/Status/new.html.twig");
    }
}
