<?php

/* SyliusShopBundle:Checkout/Complete:_form.html.twig */
class __TwigTemplate_85a87f24c4aaffaeac5a8327dcd2f492e84e1aab11ccc3bb502a5d55cb0dab0e extends Twig_Template
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
        $__internal_94f50e16ca0d92e9abcb97dff8943d600c1c0f0ebbfd0b6a0c59e41cf9f8bd61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94f50e16ca0d92e9abcb97dff8943d600c1c0f0ebbfd0b6a0c59e41cf9f8bd61->enter($__internal_94f50e16ca0d92e9abcb97dff8943d600c1c0f0ebbfd0b6a0c59e41cf9f8bd61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Checkout/Complete:_form.html.twig"));

        $__internal_596e112e3f3ce78432f63b912fac01b97ab837f537de78d8c34b42c4a06f1837 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_596e112e3f3ce78432f63b912fac01b97ab837f537de78d8c34b42c4a06f1837->enter($__internal_596e112e3f3ce78432f63b912fac01b97ab837f537de78d8c34b42c4a06f1837_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Checkout/Complete:_form.html.twig"));

        // line 1
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1, $this->getSourceContext()); })()), "notes", array()), 'row', array("attr" => array("rows" => 3)));
        echo "
";
        
        $__internal_94f50e16ca0d92e9abcb97dff8943d600c1c0f0ebbfd0b6a0c59e41cf9f8bd61->leave($__internal_94f50e16ca0d92e9abcb97dff8943d600c1c0f0ebbfd0b6a0c59e41cf9f8bd61_prof);

        
        $__internal_596e112e3f3ce78432f63b912fac01b97ab837f537de78d8c34b42c4a06f1837->leave($__internal_596e112e3f3ce78432f63b912fac01b97ab837f537de78d8c34b42c4a06f1837_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Checkout/Complete:_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ form_row(form.notes, {'attr': {'rows': 3}}) }}
", "SyliusShopBundle:Checkout/Complete:_form.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Checkout/Complete/_form.html.twig");
    }
}
