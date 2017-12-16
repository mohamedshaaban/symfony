<?php

/* SyliusAdminBundle:PromotionCoupon/Generate:_form.html.twig */
class __TwigTemplate_86b6e02b38f7aac8d315c33d632fa786d02e3f4cfbd2d26526ded73fb236046c extends Twig_Template
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
        $__internal_9f2c07fdd265591a370f344a1c1a328a4667fa3b2fc73f2b08e5161bbdf7b075 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f2c07fdd265591a370f344a1c1a328a4667fa3b2fc73f2b08e5161bbdf7b075->enter($__internal_9f2c07fdd265591a370f344a1c1a328a4667fa3b2fc73f2b08e5161bbdf7b075_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:PromotionCoupon/Generate:_form.html.twig"));

        $__internal_151dbd22bd3ca78981d40f39292b5726bb3caa4e77e029c9bcb8fe45478e6b7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_151dbd22bd3ca78981d40f39292b5726bb3caa4e77e029c9bcb8fe45478e6b7d->enter($__internal_151dbd22bd3ca78981d40f39292b5726bb3caa4e77e029c9bcb8fe45478e6b7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:PromotionCoupon/Generate:_form.html.twig"));

        // line 1
        echo "<div class=\"ui two column stackable grid\">
    <div class=\"column\">
        <div class=\"ui segment\">
            ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->getSourceContext()); })()), 'errors');
        echo "
            ";
        // line 5
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 5, $this->getSourceContext()); })()), "amount", array()), 'row');
        echo "
            ";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), "codeLength", array()), 'row');
        echo "
        </div>
    </div>
    <div class=\"column\">
        <div class=\"ui segment\">
            <h4 class=\"ui dividing header\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.expiration_and_usage_limits"), "html", null, true);
        echo "</h4>
            <div class=\"two fields\">
                ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 13, $this->getSourceContext()); })()), "expiresAt", array()), 'row');
        echo "
                ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 14, $this->getSourceContext()); })()), "usageLimit", array()), 'row');
        echo "
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_9f2c07fdd265591a370f344a1c1a328a4667fa3b2fc73f2b08e5161bbdf7b075->leave($__internal_9f2c07fdd265591a370f344a1c1a328a4667fa3b2fc73f2b08e5161bbdf7b075_prof);

        
        $__internal_151dbd22bd3ca78981d40f39292b5726bb3caa4e77e029c9bcb8fe45478e6b7d->leave($__internal_151dbd22bd3ca78981d40f39292b5726bb3caa4e77e029c9bcb8fe45478e6b7d_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:PromotionCoupon/Generate:_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 14,  51 => 13,  46 => 11,  38 => 6,  34 => 5,  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui two column stackable grid\">
    <div class=\"column\">
        <div class=\"ui segment\">
            {{ form_errors(form) }}
            {{ form_row(form.amount) }}
            {{ form_row(form.codeLength) }}
        </div>
    </div>
    <div class=\"column\">
        <div class=\"ui segment\">
            <h4 class=\"ui dividing header\">{{ 'sylius.ui.expiration_and_usage_limits'|trans }}</h4>
            <div class=\"two fields\">
                {{ form_row(form.expiresAt) }}
                {{ form_row(form.usageLimit) }}
            </div>
        </div>
    </div>
</div>
", "SyliusAdminBundle:PromotionCoupon/Generate:_form.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/PromotionCoupon/Generate/_form.html.twig");
    }
}
