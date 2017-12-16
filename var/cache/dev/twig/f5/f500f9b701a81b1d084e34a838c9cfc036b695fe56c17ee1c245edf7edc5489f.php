<?php

/* SyliusShopBundle:Cart/Summary:_coupon.html.twig */
class __TwigTemplate_4ff69b7acb29152f1a196f66de02bb143d5c562e6c639c72ae825ccbe71f3a9f extends Twig_Template
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
        $__internal_4d72467b9fcf265ce2accbf41cdd752c4a3a96f89a34a586aa8154307789c2c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d72467b9fcf265ce2accbf41cdd752c4a3a96f89a34a586aa8154307789c2c5->enter($__internal_4d72467b9fcf265ce2accbf41cdd752c4a3a96f89a34a586aa8154307789c2c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Cart/Summary:_coupon.html.twig"));

        $__internal_61f8bec15baac3a745f3bbf6a858753e05f8e6b389dce9134ca58b649117aa03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61f8bec15baac3a745f3bbf6a858753e05f8e6b389dce9134ca58b649117aa03->enter($__internal_61f8bec15baac3a745f3bbf6a858753e05f8e6b389dce9134ca58b649117aa03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Cart/Summary:_coupon.html.twig"));

        // line 1
        echo "<div id=\"sylius-coupon\">
    <div class=\"ui coupon action input\">
        ";
        // line 3
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->getSourceContext()); })()), 'widget', array("attr" => array("placeholder" => ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.enter_your_code") . "..."))));
        echo "
        <button type=\"submit\" id=\"sylius-save\" class=\"ui teal icon labeled button\"><i class=\"ticket icon\"></i> ";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.apply_coupon"), "html", null, true);
        echo "</button>
    </div>
    <br>
    ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->getSourceContext()); })()), 'errors');
        echo "
</div>
";
        
        $__internal_4d72467b9fcf265ce2accbf41cdd752c4a3a96f89a34a586aa8154307789c2c5->leave($__internal_4d72467b9fcf265ce2accbf41cdd752c4a3a96f89a34a586aa8154307789c2c5_prof);

        
        $__internal_61f8bec15baac3a745f3bbf6a858753e05f8e6b389dce9134ca58b649117aa03->leave($__internal_61f8bec15baac3a745f3bbf6a858753e05f8e6b389dce9134ca58b649117aa03_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Cart/Summary:_coupon.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 7,  33 => 4,  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"sylius-coupon\">
    <div class=\"ui coupon action input\">
        {{ form_widget(form, {'attr': {'placeholder': 'sylius.ui.enter_your_code'|trans~'...'}}) }}
        <button type=\"submit\" id=\"sylius-save\" class=\"ui teal icon labeled button\"><i class=\"ticket icon\"></i> {{ 'sylius.ui.apply_coupon'|trans }}</button>
    </div>
    <br>
    {{ form_errors(form) }}
</div>
", "SyliusShopBundle:Cart/Summary:_coupon.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Cart/Summary/_coupon.html.twig");
    }
}
