<?php

/* @SyliusShop/Product/Show/_tabs.html.twig */
class __TwigTemplate_30bbff3b38bdac06ff8fb43d6b408e08fb0b6c99221b84cf4c4255b604af8ffe extends Twig_Template
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
        $__internal_d9b9eb221c50513ab02ede6f385861d6f30daaa778cdb467c04919576b30b1ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9b9eb221c50513ab02ede6f385861d6f30daaa778cdb467c04919576b30b1ab->enter($__internal_d9b9eb221c50513ab02ede6f385861d6f30daaa778cdb467c04919576b30b1ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Show/_tabs.html.twig"));

        $__internal_47e2e0481b7ffd56d7fa46cbc0d20c3e911958cced499b04096f2d0f034a798e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47e2e0481b7ffd56d7fa46cbc0d20c3e911958cced499b04096f2d0f034a798e->enter($__internal_47e2e0481b7ffd56d7fa46cbc0d20c3e911958cced499b04096f2d0f034a798e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Show/_tabs.html.twig"));

        // line 1
        echo "<div class=\"ui top attached large tabular menu\">
    ";
        // line 2
        $this->loadTemplate("@SyliusShop/Product/Show/Tabs/_menu.html.twig", "@SyliusShop/Product/Show/_tabs.html.twig", 2)->display($context);
        // line 3
        echo "</div>

";
        // line 5
        $this->loadTemplate("@SyliusShop/Product/Show/Tabs/_content.html.twig", "@SyliusShop/Product/Show/_tabs.html.twig", 5)->display($context);
        
        $__internal_d9b9eb221c50513ab02ede6f385861d6f30daaa778cdb467c04919576b30b1ab->leave($__internal_d9b9eb221c50513ab02ede6f385861d6f30daaa778cdb467c04919576b30b1ab_prof);

        
        $__internal_47e2e0481b7ffd56d7fa46cbc0d20c3e911958cced499b04096f2d0f034a798e->leave($__internal_47e2e0481b7ffd56d7fa46cbc0d20c3e911958cced499b04096f2d0f034a798e_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Product/Show/_tabs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 5,  30 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui top attached large tabular menu\">
    {% include '@SyliusShop/Product/Show/Tabs/_menu.html.twig' %}
</div>

{% include '@SyliusShop/Product/Show/Tabs/_content.html.twig' %}
", "@SyliusShop/Product/Show/_tabs.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle\\Resources\\views\\Product\\Show\\_tabs.html.twig");
    }
}
