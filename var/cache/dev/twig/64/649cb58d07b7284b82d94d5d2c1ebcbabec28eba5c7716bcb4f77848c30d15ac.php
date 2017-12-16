<?php

/* SyliusAdminBundle:ProductVariant/Tab:_taxes.html.twig */
class __TwigTemplate_388634c436cf60432c5e5bca732d42a48d6e347e026a0d32f8a738b8e474ecad extends Twig_Template
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
        $__internal_9a08c6bc1de50e8cafe62719efda27eb75689e67b4e41e5d493eb8782c13fb37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a08c6bc1de50e8cafe62719efda27eb75689e67b4e41e5d493eb8782c13fb37->enter($__internal_9a08c6bc1de50e8cafe62719efda27eb75689e67b4e41e5d493eb8782c13fb37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductVariant/Tab:_taxes.html.twig"));

        $__internal_617a26a1f5dffb133a8e62e83993a05323723924bcf73a2e0e5e8720ad981738 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_617a26a1f5dffb133a8e62e83993a05323723924bcf73a2e0e5e8720ad981738->enter($__internal_617a26a1f5dffb133a8e62e83993a05323723924bcf73a2e0e5e8720ad981738_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:ProductVariant/Tab:_taxes.html.twig"));

        // line 1
        echo "<div class=\"ui tab\" data-tab=\"taxes\">
    <h3 class=\"ui dividing header\">";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.taxes"), "html", null, true);
        echo "</h3>
    ";
        // line 3
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->getSourceContext()); })()), "taxCategory", array()), 'row');
        echo "

    ";
        // line 5
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array((("sylius.admin.product_variant." . (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 5, $this->getSourceContext()); })())) . ".tab_taxes"), array("form" => (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 5, $this->getSourceContext()); })()))));
        echo "
</div>
";
        
        $__internal_9a08c6bc1de50e8cafe62719efda27eb75689e67b4e41e5d493eb8782c13fb37->leave($__internal_9a08c6bc1de50e8cafe62719efda27eb75689e67b4e41e5d493eb8782c13fb37_prof);

        
        $__internal_617a26a1f5dffb133a8e62e83993a05323723924bcf73a2e0e5e8720ad981738->leave($__internal_617a26a1f5dffb133a8e62e83993a05323723924bcf73a2e0e5e8720ad981738_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:ProductVariant/Tab:_taxes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 5,  32 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui tab\" data-tab=\"taxes\">
    <h3 class=\"ui dividing header\">{{ 'sylius.ui.taxes'|trans }}</h3>
    {{ form_row(form.taxCategory) }}

    {{ sonata_block_render_event('sylius.admin.product_variant.' ~ action ~ '.tab_taxes', {'form': form}) }}
</div>
", "SyliusAdminBundle:ProductVariant/Tab:_taxes.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/ProductVariant/Tab/_taxes.html.twig");
    }
}
