<?php

/* SyliusShopBundle:Checkout/SelectPayment:_unavailable.html.twig */
class __TwigTemplate_8bed11ec58b46c710638d5de00769207dc96ebbc555513d055ffd211bf7b9e60 extends Twig_Template
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
        $__internal_cf51a331f88b7c302413607302df7fd2e0a99990fa88e26f080064448c26ad83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf51a331f88b7c302413607302df7fd2e0a99990fa88e26f080064448c26ad83->enter($__internal_cf51a331f88b7c302413607302df7fd2e0a99990fa88e26f080064448c26ad83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Checkout/SelectPayment:_unavailable.html.twig"));

        $__internal_23c1ee265d528eab79c39f3e3d03d98ff48f530c4f6c7692aab039a5181e33e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23c1ee265d528eab79c39f3e3d03d98ff48f530c4f6c7692aab039a5181e33e1->enter($__internal_23c1ee265d528eab79c39f3e3d03d98ff48f530c4f6c7692aab039a5181e33e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Checkout/SelectPayment:_unavailable.html.twig"));

        // line 1
        echo "<div class=\"ui icon message\" id=\"sylius-order-cannot-be-paid\">
    <i class=\"warning sign icon\"></i>
    <div class=\"content\">
        <div class=\"header\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.warning"), "html", null, true);
        echo "</div>
        <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.no_payment_methods_available"), "html", null, true);
        echo ".</p>
    </div>
</div>
";
        
        $__internal_cf51a331f88b7c302413607302df7fd2e0a99990fa88e26f080064448c26ad83->leave($__internal_cf51a331f88b7c302413607302df7fd2e0a99990fa88e26f080064448c26ad83_prof);

        
        $__internal_23c1ee265d528eab79c39f3e3d03d98ff48f530c4f6c7692aab039a5181e33e1->leave($__internal_23c1ee265d528eab79c39f3e3d03d98ff48f530c4f6c7692aab039a5181e33e1_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Checkout/SelectPayment:_unavailable.html.twig";
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
        return new Twig_Source("<div class=\"ui icon message\" id=\"sylius-order-cannot-be-paid\">
    <i class=\"warning sign icon\"></i>
    <div class=\"content\">
        <div class=\"header\">{{ 'sylius.ui.warning'|trans }}</div>
        <p>{{ 'sylius.ui.no_payment_methods_available'|trans }}.</p>
    </div>
</div>
", "SyliusShopBundle:Checkout/SelectPayment:_unavailable.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Checkout/SelectPayment/_unavailable.html.twig");
    }
}
