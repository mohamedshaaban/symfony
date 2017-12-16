<?php

/* SyliusAdminBundle:ProductReview/Label/Status:accepted.html.twig */
class __TwigTemplate_261c8c88a05e6fe0bc4e41bef9dd67e688be082a61c8324fc20c0faba5d7d4cb extends Twig_Template
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
        $__internal_e8845e007ef69afa2914c4432d11cdbcd072109f9c8103c4092d2e8866afe155 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8845e007ef69afa2914c4432d11cdbcd072109f9c8103c4092d2e8866afe155->enter($__internal_e8845e007ef69afa2914c4432d11cdbcd072109f9c8103c4092d2e8866afe155_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductReview/Label/Status:accepted.html.twig"));

        $__internal_15ed7045c044c45cde1171ec2610a955b072dac280a17c5967fa1f72991c83da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15ed7045c044c45cde1171ec2610a955b072dac280a17c5967fa1f72991c83da->enter($__internal_15ed7045c044c45cde1171ec2610a955b072dac280a17c5967fa1f72991c83da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductReview/Label/Status:accepted.html.twig"));

        // line 1
        echo "<span class=\"ui green label\">
    <i class=\"check icon\"></i>
    ";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 3, $this->getSourceContext()); })())), "html", null, true);
        echo "
</span>
";
        
        $__internal_e8845e007ef69afa2914c4432d11cdbcd072109f9c8103c4092d2e8866afe155->leave($__internal_e8845e007ef69afa2914c4432d11cdbcd072109f9c8103c4092d2e8866afe155_prof);

        
        $__internal_15ed7045c044c45cde1171ec2610a955b072dac280a17c5967fa1f72991c83da->leave($__internal_15ed7045c044c45cde1171ec2610a955b072dac280a17c5967fa1f72991c83da_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:ProductReview/Label/Status:accepted.html.twig";
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
        return new Twig_Source("<span class=\"ui green label\">
    <i class=\"check icon\"></i>
    {{ value|trans }}
</span>
", "SyliusAdminBundle:ProductReview/Label/Status:accepted.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/ProductReview/Label/Status/accepted.html.twig");
    }
}
