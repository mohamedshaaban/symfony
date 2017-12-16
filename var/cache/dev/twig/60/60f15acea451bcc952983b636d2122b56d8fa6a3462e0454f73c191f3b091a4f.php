<?php

/* @SyliusShop/Login/_header.html.twig */
class __TwigTemplate_f399ff57923f3a5202995a4bf0046a01f84d676486912c64220b093a9ebfd9a5 extends Twig_Template
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
        $__internal_aa448fa61c5b89007ebbf61ec50155580359acfdc02eb4064cd8557c04f74d0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa448fa61c5b89007ebbf61ec50155580359acfdc02eb4064cd8557c04f74d0b->enter($__internal_aa448fa61c5b89007ebbf61ec50155580359acfdc02eb4064cd8557c04f74d0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Login/_header.html.twig"));

        $__internal_457c7ee3a0ae20ec99da8d736b548d4c329a0337fdcbb6132b3c0e977080a2ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_457c7ee3a0ae20ec99da8d736b548d4c329a0337fdcbb6132b3c0e977080a2ba->enter($__internal_457c7ee3a0ae20ec99da8d736b548d4c329a0337fdcbb6132b3c0e977080a2ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Login/_header.html.twig"));

        // line 1
        echo "<h1 class=\"ui header\">
    <i class=\"circular user icon\"></i>
    <div class=\"content\">
        ";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.customer_login"), "html", null, true);
        echo "
        <div class=\"sub header\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.access_your_store_account_or_create_a_new_one"), "html", null, true);
        echo "</div>
    </div>
</h1>

";
        
        $__internal_aa448fa61c5b89007ebbf61ec50155580359acfdc02eb4064cd8557c04f74d0b->leave($__internal_aa448fa61c5b89007ebbf61ec50155580359acfdc02eb4064cd8557c04f74d0b_prof);

        
        $__internal_457c7ee3a0ae20ec99da8d736b548d4c329a0337fdcbb6132b3c0e977080a2ba->leave($__internal_457c7ee3a0ae20ec99da8d736b548d4c329a0337fdcbb6132b3c0e977080a2ba_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Login/_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 5,  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1 class=\"ui header\">
    <i class=\"circular user icon\"></i>
    <div class=\"content\">
        {{ 'sylius.ui.customer_login'|trans }}
        <div class=\"sub header\">{{ 'sylius.ui.access_your_store_account_or_create_a_new_one'|trans }}</div>
    </div>
</h1>

", "@SyliusShop/Login/_header.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle\\Resources\\views\\Login\\_header.html.twig");
    }
}
