<?php

/* SyliusShopBundle:Product/Show:_options.html.twig */
class __TwigTemplate_2b28757cd49ba3d3515cba7329987cf5e7ab2b578ed93bcdeca0d79434b1920f extends Twig_Template
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
        $__internal_641de5f45a0ddddc49aab436dc9975d3f06fdd3b702413cc850cf4156b24e16c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_641de5f45a0ddddc49aab436dc9975d3f06fdd3b702413cc850cf4156b24e16c->enter($__internal_641de5f45a0ddddc49aab436dc9975d3f06fdd3b702413cc850cf4156b24e16c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Product/Show:_options.html.twig"));

        $__internal_5bae5c82a26afa514a8d0a2174beb24e5956ebf76b3784b9055db28787d0ef41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bae5c82a26afa514a8d0a2174beb24e5956ebf76b3784b9055db28787d0ef41->enter($__internal_5bae5c82a26afa514a8d0a2174beb24e5956ebf76b3784b9055db28787d0ef41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Product/Show:_options.html.twig"));

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
        
        $__internal_641de5f45a0ddddc49aab436dc9975d3f06fdd3b702413cc850cf4156b24e16c->leave($__internal_641de5f45a0ddddc49aab436dc9975d3f06fdd3b702413cc850cf4156b24e16c_prof);

        
        $__internal_5bae5c82a26afa514a8d0a2174beb24e5956ebf76b3784b9055db28787d0ef41->leave($__internal_5bae5c82a26afa514a8d0a2174beb24e5956ebf76b3784b9055db28787d0ef41_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Product/Show:_options.html.twig";
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
", "SyliusShopBundle:Product/Show:_options.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Product/Show/_options.html.twig");
    }
}
