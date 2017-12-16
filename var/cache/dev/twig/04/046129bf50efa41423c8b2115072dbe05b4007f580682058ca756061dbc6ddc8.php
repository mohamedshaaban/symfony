<?php

/* SyliusShopBundle:Checkout:_support.html.twig */
class __TwigTemplate_acd6358963c95917a1491ff47bc350f9cd669ed24356b175d43182d54488631c extends Twig_Template
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
        $__internal_1f2c9bbb5e273c5dbc9a2cd710a386efb994b183bf765f291a2ac03d234f410d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f2c9bbb5e273c5dbc9a2cd710a386efb994b183bf765f291a2ac03d234f410d->enter($__internal_1f2c9bbb5e273c5dbc9a2cd710a386efb994b183bf765f291a2ac03d234f410d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Checkout:_support.html.twig"));

        $__internal_c48e2a36dae8eb238934d2060470da58aadcd7d417ffe3e59080d0da5673877b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c48e2a36dae8eb238934d2060470da58aadcd7d417ffe3e59080d0da5673877b->enter($__internal_c48e2a36dae8eb238934d2060470da58aadcd7d417ffe3e59080d0da5673877b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Checkout:_support.html.twig"));

        // line 1
        echo "<h2 class=\"ui center aligned icon header\">
    <i class=\"circular phone icon\"></i>
    +48 123 456 789
    <span class=\"sub header\">
        ";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.need_assistance"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.call_us"), "html", null, true);
        echo "
    </span>
</h2>

<div class=\"ui divider\"></div>

<div class=\"ui center aligned basic segment\">
    <i class=\"huge mastercard icon\"></i>
    <i class=\"huge visa icon\"></i>
    <i class=\"huge paypal card icon\"></i>
</div>
";
        
        $__internal_1f2c9bbb5e273c5dbc9a2cd710a386efb994b183bf765f291a2ac03d234f410d->leave($__internal_1f2c9bbb5e273c5dbc9a2cd710a386efb994b183bf765f291a2ac03d234f410d_prof);

        
        $__internal_c48e2a36dae8eb238934d2060470da58aadcd7d417ffe3e59080d0da5673877b->leave($__internal_c48e2a36dae8eb238934d2060470da58aadcd7d417ffe3e59080d0da5673877b_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Checkout:_support.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h2 class=\"ui center aligned icon header\">
    <i class=\"circular phone icon\"></i>
    +48 123 456 789
    <span class=\"sub header\">
        {{ 'sylius.ui.need_assistance'|trans }} {{ 'sylius.ui.call_us'|trans }}
    </span>
</h2>

<div class=\"ui divider\"></div>

<div class=\"ui center aligned basic segment\">
    <i class=\"huge mastercard icon\"></i>
    <i class=\"huge visa icon\"></i>
    <i class=\"huge paypal card icon\"></i>
</div>
", "SyliusShopBundle:Checkout:_support.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Checkout/_support.html.twig");
    }
}
