<?php

/* SyliusShopBundle:Common/Order:_table.html.twig */
class __TwigTemplate_91138514e7f494f350fa49588f841bdfca6d654264f374b78fd78f12396f6533 extends Twig_Template
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
        $__internal_3cbddcd82c663e351a6955982241768d15a51efc634aa3790fdea95bb1f9c665 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cbddcd82c663e351a6955982241768d15a51efc634aa3790fdea95bb1f9c665->enter($__internal_3cbddcd82c663e351a6955982241768d15a51efc634aa3790fdea95bb1f9c665_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Common/Order:_table.html.twig"));

        $__internal_16e86d63d7a61684ef9eb6649c8d42a6bec3ebdd8e9f1871aafbec460a2b6f3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16e86d63d7a61684ef9eb6649c8d42a6bec3ebdd8e9f1871aafbec460a2b6f3f->enter($__internal_16e86d63d7a61684ef9eb6649c8d42a6bec3ebdd8e9f1871aafbec460a2b6f3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Common/Order:_table.html.twig"));

        // line 1
        echo "<table class=\"ui celled table\" id=\"sylius-order\">
    <thead>
        ";
        // line 3
        $this->loadTemplate("@SyliusShop/Common/Order/Table/_headers.html.twig", "SyliusShopBundle:Common/Order:_table.html.twig", 3)->display($context);
        // line 4
        echo "    </thead>
    <tbody>
        ";
        // line 6
        $this->loadTemplate("@SyliusShop/Common/Order/Table/_items.html.twig", "SyliusShopBundle:Common/Order:_table.html.twig", 6)->display($context);
        // line 7
        echo "    </tbody>
    <tfoot>
        ";
        // line 9
        $this->loadTemplate("@SyliusShop/Common/Order/Table/_totals.html.twig", "SyliusShopBundle:Common/Order:_table.html.twig", 9)->display($context);
        // line 10
        echo "    </tfoot>
</table>
";
        
        $__internal_3cbddcd82c663e351a6955982241768d15a51efc634aa3790fdea95bb1f9c665->leave($__internal_3cbddcd82c663e351a6955982241768d15a51efc634aa3790fdea95bb1f9c665_prof);

        
        $__internal_16e86d63d7a61684ef9eb6649c8d42a6bec3ebdd8e9f1871aafbec460a2b6f3f->leave($__internal_16e86d63d7a61684ef9eb6649c8d42a6bec3ebdd8e9f1871aafbec460a2b6f3f_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Common/Order:_table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 10,  41 => 9,  37 => 7,  35 => 6,  31 => 4,  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table class=\"ui celled table\" id=\"sylius-order\">
    <thead>
        {% include '@SyliusShop/Common/Order/Table/_headers.html.twig' %}
    </thead>
    <tbody>
        {% include '@SyliusShop/Common/Order/Table/_items.html.twig' %}
    </tbody>
    <tfoot>
        {% include '@SyliusShop/Common/Order/Table/_totals.html.twig' %}
    </tfoot>
</table>
", "SyliusShopBundle:Common/Order:_table.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Common/Order/_table.html.twig");
    }
}
