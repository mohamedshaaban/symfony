<?php

/* @SyliusShop/Product/Show/_options.html.twig */
class __TwigTemplate_9142054c699aecdfa8741c7bdb37783d9588308177b3f287e5cc4a78f2a5ef73 extends Twig_Template
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
        $__internal_10595f895d46d5cff6fd00a321c4cd9d66e9331d450d7d03fbe54e5e48ac3e2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10595f895d46d5cff6fd00a321c4cd9d66e9331d450d7d03fbe54e5e48ac3e2c->enter($__internal_10595f895d46d5cff6fd00a321c4cd9d66e9331d450d7d03fbe54e5e48ac3e2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Show/_options.html.twig"));

        $__internal_4faccb59cac1e2dff6cb6a326be3f399f395e5f7f256bc312187537f1d33285a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4faccb59cac1e2dff6cb6a326be3f399f395e5f7f256bc312187537f1d33285a->enter($__internal_4faccb59cac1e2dff6cb6a326be3f399f395e5f7f256bc312187537f1d33285a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Show/_options.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1, $this->getSourceContext()); })()), "cartItem", array()), "variant", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["option_form"]) {
            // line 2
            echo "    ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["option_form"], 'row', array("attr" => array("data-option" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["option_form"], "vars", array()), "name", array()))));
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_form'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_10595f895d46d5cff6fd00a321c4cd9d66e9331d450d7d03fbe54e5e48ac3e2c->leave($__internal_10595f895d46d5cff6fd00a321c4cd9d66e9331d450d7d03fbe54e5e48ac3e2c_prof);

        
        $__internal_4faccb59cac1e2dff6cb6a326be3f399f395e5f7f256bc312187537f1d33285a->leave($__internal_4faccb59cac1e2dff6cb6a326be3f399f395e5f7f256bc312187537f1d33285a_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Product/Show/_options.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for option_form in form.cartItem.variant %}
    {{ form_row(option_form, { 'attr': { 'data-option': option_form.vars.name } }) }}
{% endfor %}
", "@SyliusShop/Product/Show/_options.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle\\Resources\\views\\Product\\Show\\_options.html.twig");
    }
}
