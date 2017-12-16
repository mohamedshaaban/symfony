<?php

/* SyliusShopBundle:ProductReview:_form.html.twig */
class __TwigTemplate_11109921b2fdce47b91b4c4ed345dafd35cbd7c787d05e4056cf06f0710c3180 extends Twig_Template
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
        $__internal_28531fd12977f5b8cad020f90560db707f4c6c517f7752324165b82ab915681f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28531fd12977f5b8cad020f90560db707f4c6c517f7752324165b82ab915681f->enter($__internal_28531fd12977f5b8cad020f90560db707f4c6c517f7752324165b82ab915681f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:ProductReview:_form.html.twig"));

        $__internal_1c32681f414103a17e4c3f1dbffe539bc5570020d448c51709aa028996188c79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c32681f414103a17e4c3f1dbffe539bc5570020d448c51709aa028996188c79->enter($__internal_1c32681f414103a17e4c3f1dbffe539bc5570020d448c51709aa028996188c79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:ProductReview:_form.html.twig"));

        // line 1
        echo "<div class=\"field\">
    <div class=\"ui huge star rating\" data-rating=\"0\" data-max-rating=\"5\"></div>
    <br/>
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->getSourceContext()); })()), "rating", array()), 'errors');
        echo "
    ";
        // line 5
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 5, $this->getSourceContext()); })()), "rating", array()), 'widget', array("attr" => array("style" => "display: none")));
        echo "
</div>
<div class=\"field\">
    ";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), "title", array()), 'widget', array("attr" => array("placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.title"))));
        echo "
    ";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), "title", array()), 'errors');
        echo "
</div>
<div class=\"field\">
    ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 12, $this->getSourceContext()); })()), "comment", array()), 'widget', array("attr" => array("placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.write_your_own_review"))));
        echo "
    ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 13, $this->getSourceContext()); })()), "comment", array()), 'errors');
        echo "
</div>
";
        // line 15
        if ( !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 16
            echo "    <div class=\"field\">
        ";
            // line 17
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 17, $this->getSourceContext()); })()), "author", array()), "email", array()), 'widget', array("attr" => array("placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.email"))));
            echo "
        ";
            // line 18
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->getSourceContext()); })()), "author", array()), "email", array()), 'errors');
            echo "
    </div>
";
        }
        
        $__internal_28531fd12977f5b8cad020f90560db707f4c6c517f7752324165b82ab915681f->leave($__internal_28531fd12977f5b8cad020f90560db707f4c6c517f7752324165b82ab915681f_prof);

        
        $__internal_1c32681f414103a17e4c3f1dbffe539bc5570020d448c51709aa028996188c79->leave($__internal_1c32681f414103a17e4c3f1dbffe539bc5570020d448c51709aa028996188c79_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:ProductReview:_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 18,  64 => 17,  61 => 16,  59 => 15,  54 => 13,  50 => 12,  44 => 9,  40 => 8,  34 => 5,  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"field\">
    <div class=\"ui huge star rating\" data-rating=\"0\" data-max-rating=\"5\"></div>
    <br/>
    {{ form_errors(form.rating) }}
    {{ form_widget(form.rating, {'attr': {'style': 'display: none'} }) }}
</div>
<div class=\"field\">
    {{ form_widget(form.title, {'attr': {'placeholder': 'sylius.ui.title'|trans} }) }}
    {{ form_errors(form.title) }}
</div>
<div class=\"field\">
    {{ form_widget(form.comment, {'attr': {'placeholder': 'sylius.ui.write_your_own_review'|trans} }) }}
    {{ form_errors(form.comment) }}
</div>
{% if not is_granted(\"IS_AUTHENTICATED_FULLY\") %}
    <div class=\"field\">
        {{ form_widget(form.author.email, {'attr': {'placeholder': 'sylius.ui.email'|trans}}) }}
        {{ form_errors(form.author.email) }}
    </div>
{% endif %}
", "SyliusShopBundle:ProductReview:_form.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/ProductReview/_form.html.twig");
    }
}
