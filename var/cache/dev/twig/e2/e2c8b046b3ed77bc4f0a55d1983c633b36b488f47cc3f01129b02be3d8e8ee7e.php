<?php

/* SyliusAdminBundle:ProductReview:_form.html.twig */
class __TwigTemplate_f7437c9d6f14b450a2d37106379def73e1e2f0b04cc62f808b493d86d3b79279 extends Twig_Template
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
        $__internal_4f329c2df2c297e664db7bf65232503e4f5131d6bbe38d3edf1da627a185f4e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f329c2df2c297e664db7bf65232503e4f5131d6bbe38d3edf1da627a185f4e4->enter($__internal_4f329c2df2c297e664db7bf65232503e4f5131d6bbe38d3edf1da627a185f4e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductReview:_form.html.twig"));

        $__internal_f6b5eb45d2bb4fb65008be84e060d3782baae1f8ba124a560749b45f5b6005bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6b5eb45d2bb4fb65008be84e060d3782baae1f8ba124a560749b45f5b6005bd->enter($__internal_f6b5eb45d2bb4fb65008be84e060d3782baae1f8ba124a560749b45f5b6005bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductReview:_form.html.twig"));

        // line 1
        echo "<div class=\"ui stackable grid\">
    <div class=\"twelve wide column\">
        <div class=\"ui segment\">
            ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->getSourceContext()); })()), 'errors');
        echo "
            ";
        // line 5
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 5, $this->getSourceContext()); })()), "title", array()), 'row');
        echo "
            ";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), "comment", array()), 'row');
        echo "
            ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->getSourceContext()); })()), "rating", array()), 'row');
        echo "
        </div>
    </div>
    <div class=\"four wide column\">
        ";
        // line 11
        $this->loadTemplate("@SyliusAdmin/ProductReview/_product.html.twig", "SyliusAdminBundle:ProductReview:_form.html.twig", 11)->display($context);
        // line 12
        echo "        ";
        $this->loadTemplate("@SyliusAdmin/ProductReview/_author.html.twig", "SyliusAdminBundle:ProductReview:_form.html.twig", 12)->display($context);
        // line 13
        echo "    </div>
</div>
";
        
        $__internal_4f329c2df2c297e664db7bf65232503e4f5131d6bbe38d3edf1da627a185f4e4->leave($__internal_4f329c2df2c297e664db7bf65232503e4f5131d6bbe38d3edf1da627a185f4e4_prof);

        
        $__internal_f6b5eb45d2bb4fb65008be84e060d3782baae1f8ba124a560749b45f5b6005bd->leave($__internal_f6b5eb45d2bb4fb65008be84e060d3782baae1f8ba124a560749b45f5b6005bd_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:ProductReview:_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 13,  51 => 12,  49 => 11,  42 => 7,  38 => 6,  34 => 5,  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui stackable grid\">
    <div class=\"twelve wide column\">
        <div class=\"ui segment\">
            {{ form_errors(form) }}
            {{ form_row(form.title) }}
            {{ form_row(form.comment) }}
            {{ form_row(form.rating) }}
        </div>
    </div>
    <div class=\"four wide column\">
        {% include '@SyliusAdmin/ProductReview/_product.html.twig' %}
        {% include '@SyliusAdmin/ProductReview/_author.html.twig' %}
    </div>
</div>
", "SyliusAdminBundle:ProductReview:_form.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/ProductReview/_form.html.twig");
    }
}
