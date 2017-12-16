<?php

/* @SyliusShop/Login/_register.html.twig */
class __TwigTemplate_409b58edf8874acb89df82efa8e0a0400ee2e5a49bf1948e4b93d52aa6bb8878 extends Twig_Template
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
        $__internal_2b61e1b194e1a173352d7686e89fda86eb12d1c1631e26a3bc07b301a67bf8bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b61e1b194e1a173352d7686e89fda86eb12d1c1631e26a3bc07b301a67bf8bb->enter($__internal_2b61e1b194e1a173352d7686e89fda86eb12d1c1631e26a3bc07b301a67bf8bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Login/_register.html.twig"));

        $__internal_bc11b800859962a0fe7c95f30541df9c6084fb8dfbf78710b2958faecf24132a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc11b800859962a0fe7c95f30541df9c6084fb8dfbf78710b2958faecf24132a->enter($__internal_bc11b800859962a0fe7c95f30541df9c6084fb8dfbf78710b2958faecf24132a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Login/_register.html.twig"));

        // line 1
        echo "<h4 class=\"ui dividing header\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.new_customers"), "html", null, true);
        echo "</h4>
<a href=\"";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_register");
        echo "\" class=\"ui big green labeled icon fluid button\">
    <i class=\"signup icon\"></i>
    ";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.create_an_account"), "html", null, true);
        echo "
</a>
";
        
        $__internal_2b61e1b194e1a173352d7686e89fda86eb12d1c1631e26a3bc07b301a67bf8bb->leave($__internal_2b61e1b194e1a173352d7686e89fda86eb12d1c1631e26a3bc07b301a67bf8bb_prof);

        
        $__internal_bc11b800859962a0fe7c95f30541df9c6084fb8dfbf78710b2958faecf24132a->leave($__internal_bc11b800859962a0fe7c95f30541df9c6084fb8dfbf78710b2958faecf24132a_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Login/_register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 4,  30 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h4 class=\"ui dividing header\">{{ 'sylius.ui.new_customers'|trans }}</h4>
<a href=\"{{ path('sylius_shop_register') }}\" class=\"ui big green labeled icon fluid button\">
    <i class=\"signup icon\"></i>
    {{ 'sylius.ui.create_an_account'|trans }}
</a>
", "@SyliusShop/Login/_register.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle\\Resources\\views\\Login\\_register.html.twig");
    }
}
