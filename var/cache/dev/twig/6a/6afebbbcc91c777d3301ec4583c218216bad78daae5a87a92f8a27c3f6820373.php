<?php

/* @SyliusAdmin/Dashboard/_header.html.twig */
class __TwigTemplate_0c61017cf5826760349fe37dbf35056866a9af1ae441178b40ee5af044937dee extends Twig_Template
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
        $__internal_58827efa671265864683c0795bd146f1690b9544e78adae11f14dc56edbdcd90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58827efa671265864683c0795bd146f1690b9544e78adae11f14dc56edbdcd90->enter($__internal_58827efa671265864683c0795bd146f1690b9544e78adae11f14dc56edbdcd90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/Dashboard/_header.html.twig"));

        $__internal_2aec3dd54550e94038619ba11c1b3ad2787e678bb78aa1d17d8489be6613be77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2aec3dd54550e94038619ba11c1b3ad2787e678bb78aa1d17d8489be6613be77->enter($__internal_2aec3dd54550e94038619ba11c1b3ad2787e678bb78aa1d17d8489be6613be77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/Dashboard/_header.html.twig"));

        // line 1
        $context["headers"] = $this->loadTemplate("SyliusUiBundle:Macro:headers.html.twig", "@SyliusAdmin/Dashboard/_header.html.twig", 1);
        // line 2
        echo "
<div class=\"ui stackable grid\">
    <div class=\"twelve wide column\">
        ";
        // line 5
        echo $context["headers"]->macro_default($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.dashboard"), "home", $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.overview_of_your_store"));
        echo "

        ";
        // line 7
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.admin.dashboard.header", array("channel" => (isset($context["channel"]) || array_key_exists("channel", $context) ? $context["channel"] : (function () { throw new Twig_Error_Runtime('Variable "channel" does not exist.', 7, $this->getSourceContext()); })()), "statistics" => (isset($context["statistics"]) || array_key_exists("statistics", $context) ? $context["statistics"] : (function () { throw new Twig_Error_Runtime('Variable "statistics" does not exist.', 7, $this->getSourceContext()); })()))));
        echo "
    </div>
    <div class=\"four wide middle aligned column\">
        ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("sylius_admin_partial_channel_index", array("template" => "@SyliusAdmin/Dashboard/_channelSwitch.html.twig", "channel" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["channel"]) || array_key_exists("channel", $context) ? $context["channel"] : (function () { throw new Twig_Error_Runtime('Variable "channel" does not exist.', 10, $this->getSourceContext()); })()), "code", array()))));
        echo "
    </div>
</div>
";
        
        $__internal_58827efa671265864683c0795bd146f1690b9544e78adae11f14dc56edbdcd90->leave($__internal_58827efa671265864683c0795bd146f1690b9544e78adae11f14dc56edbdcd90_prof);

        
        $__internal_2aec3dd54550e94038619ba11c1b3ad2787e678bb78aa1d17d8489be6613be77->leave($__internal_2aec3dd54550e94038619ba11c1b3ad2787e678bb78aa1d17d8489be6613be77_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Dashboard/_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 10,  37 => 7,  32 => 5,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import 'SyliusUiBundle:Macro:headers.html.twig' as headers %}

<div class=\"ui stackable grid\">
    <div class=\"twelve wide column\">
        {{ headers.default('sylius.ui.dashboard'|trans, 'home', 'sylius.ui.overview_of_your_store'|trans) }}

        {{ sonata_block_render_event('sylius.admin.dashboard.header', {'channel': channel, 'statistics': statistics}) }}
    </div>
    <div class=\"four wide middle aligned column\">
        {{ render(url('sylius_admin_partial_channel_index', {'template': '@SyliusAdmin/Dashboard/_channelSwitch.html.twig', 'channel': channel.code})) }}
    </div>
</div>
", "@SyliusAdmin/Dashboard/_header.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle\\Resources\\views\\Dashboard\\_header.html.twig");
    }
}
