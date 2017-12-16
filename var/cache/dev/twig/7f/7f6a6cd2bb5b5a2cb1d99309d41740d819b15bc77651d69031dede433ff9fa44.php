<?php

/* @SyliusUi/Macro/messages.html.twig */
class __TwigTemplate_582972bff9764c9f7f2ee14e4ca4f547bc315baef87c007557cf55b0efbbcf1d extends Twig_Template
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
        $__internal_8d16897706a4268a018ec2580f9df57f411475305c1ff5151b64ac223d69a8d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d16897706a4268a018ec2580f9df57f411475305c1ff5151b64ac223d69a8d7->enter($__internal_8d16897706a4268a018ec2580f9df57f411475305c1ff5151b64ac223d69a8d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusUi/Macro/messages.html.twig"));

        $__internal_aa54660c557420a0894db55adfe1951d741e947234c9471feeee3aa17267feb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa54660c557420a0894db55adfe1951d741e947234c9471feeee3aa17267feb4->enter($__internal_aa54660c557420a0894db55adfe1951d741e947234c9471feeee3aa17267feb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusUi/Macro/messages.html.twig"));

        // line 14
        echo "
";
        // line 19
        echo "
";
        // line 24
        echo "
";
        
        $__internal_8d16897706a4268a018ec2580f9df57f411475305c1ff5151b64ac223d69a8d7->leave($__internal_8d16897706a4268a018ec2580f9df57f411475305c1ff5151b64ac223d69a8d7_prof);

        
        $__internal_aa54660c557420a0894db55adfe1951d741e947234c9471feeee3aa17267feb4->leave($__internal_aa54660c557420a0894db55adfe1951d741e947234c9471feeee3aa17267feb4_prof);

    }

    // line 1
    public function macro_default($__message__ = null, $__icon__ = null, $__type__ = null, $__header__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "message" => $__message__,
            "icon" => $__icon__,
            "type" => $__type__,
            "header" => $__header__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_d586768af6f45c9a69b7c1302fdc2c8d02fde5141ecfda6f7f133f1303d0d613 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_d586768af6f45c9a69b7c1302fdc2c8d02fde5141ecfda6f7f133f1303d0d613->enter($__internal_d586768af6f45c9a69b7c1302fdc2c8d02fde5141ecfda6f7f133f1303d0d613_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "default"));

            $__internal_badb6f5447be25597cd60762c1157df0eae239d900b89a6d2f594100ae0989bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_badb6f5447be25597cd60762c1157df0eae239d900b89a6d2f594100ae0989bf->enter($__internal_badb6f5447be25597cd60762c1157df0eae239d900b89a6d2f594100ae0989bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "default"));

            // line 2
            echo "    <div class=\"ui icon ";
            echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 2, $this->getSourceContext()); })()), "")) : ("")), "html", null, true);
            echo " message\">
        <i class=\"";
            // line 3
            echo twig_escape_filter($this->env, (isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new Twig_Error_Runtime('Variable "icon" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
            echo " icon\"></i>
        <div class=\"content\">
            ";
            // line 5
            if ( !twig_test_empty((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 5, $this->getSourceContext()); })()))) {
                // line 6
                echo "            <div class=\"header\">
                ";
                // line 7
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(((array_key_exists("header", $context)) ? (_twig_default_filter((isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new Twig_Error_Runtime('Variable "header" does not exist.', 7, $this->getSourceContext()); })()), (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 7, $this->getSourceContext()); })()))) : ((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 7, $this->getSourceContext()); })())))), "html", null, true);
                echo "
            </div>
            ";
            }
            // line 10
            echo "            <p>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 10, $this->getSourceContext()); })())), "html", null, true);
            echo "</p>
        </div>
    </div>
";
            
            $__internal_badb6f5447be25597cd60762c1157df0eae239d900b89a6d2f594100ae0989bf->leave($__internal_badb6f5447be25597cd60762c1157df0eae239d900b89a6d2f594100ae0989bf_prof);

            
            $__internal_d586768af6f45c9a69b7c1302fdc2c8d02fde5141ecfda6f7f133f1303d0d613->leave($__internal_d586768af6f45c9a69b7c1302fdc2c8d02fde5141ecfda6f7f133f1303d0d613_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 15
    public function macro_info($__message__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "message" => $__message__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_a07872fa14e4e64096c8124a59279f6c839233396e6c1dc9171a85c0f3ee5f5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_a07872fa14e4e64096c8124a59279f6c839233396e6c1dc9171a85c0f3ee5f5c->enter($__internal_a07872fa14e4e64096c8124a59279f6c839233396e6c1dc9171a85c0f3ee5f5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "info"));

            $__internal_43f7c7748003a60bd9599cecaf6db97f81c9215428671fef87a0b30dde800d41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_43f7c7748003a60bd9599cecaf6db97f81c9215428671fef87a0b30dde800d41->enter($__internal_43f7c7748003a60bd9599cecaf6db97f81c9215428671fef87a0b30dde800d41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "info"));

            // line 16
            echo "    ";
            $context["messages"] = $this;
            // line 17
            echo "    ";
            echo $context["messages"]->macro_default((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 17, $this->getSourceContext()); })()), "info circle", "info", "sylius.ui.info");
            echo "
";
            
            $__internal_43f7c7748003a60bd9599cecaf6db97f81c9215428671fef87a0b30dde800d41->leave($__internal_43f7c7748003a60bd9599cecaf6db97f81c9215428671fef87a0b30dde800d41_prof);

            
            $__internal_a07872fa14e4e64096c8124a59279f6c839233396e6c1dc9171a85c0f3ee5f5c->leave($__internal_a07872fa14e4e64096c8124a59279f6c839233396e6c1dc9171a85c0f3ee5f5c_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 20
    public function macro_success($__message__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "message" => $__message__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_b1b66bc7c01fca79c620f9fe5d01e89b67f8e1fb29825b8e4bc3fde5f873f2fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_b1b66bc7c01fca79c620f9fe5d01e89b67f8e1fb29825b8e4bc3fde5f873f2fd->enter($__internal_b1b66bc7c01fca79c620f9fe5d01e89b67f8e1fb29825b8e4bc3fde5f873f2fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "success"));

            $__internal_8ebbb3152b98b649d8c68a2eacf3ac84fe59be1e7e410f763b8a1f86e24a47f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_8ebbb3152b98b649d8c68a2eacf3ac84fe59be1e7e410f763b8a1f86e24a47f1->enter($__internal_8ebbb3152b98b649d8c68a2eacf3ac84fe59be1e7e410f763b8a1f86e24a47f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "success"));

            // line 21
            echo "    ";
            $context["messages"] = $this;
            // line 22
            echo "    ";
            echo $context["messages"]->macro_default((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 22, $this->getSourceContext()); })()), "checkmark", "success", "sylius.ui.success");
            echo "
";
            
            $__internal_8ebbb3152b98b649d8c68a2eacf3ac84fe59be1e7e410f763b8a1f86e24a47f1->leave($__internal_8ebbb3152b98b649d8c68a2eacf3ac84fe59be1e7e410f763b8a1f86e24a47f1_prof);

            
            $__internal_b1b66bc7c01fca79c620f9fe5d01e89b67f8e1fb29825b8e4bc3fde5f873f2fd->leave($__internal_b1b66bc7c01fca79c620f9fe5d01e89b67f8e1fb29825b8e4bc3fde5f873f2fd_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 25
    public function macro_error($__message__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "message" => $__message__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_f215c2f91f0d2efb9ccf6415d6cd22309f2b905f58c313523bc06859493f1338 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_f215c2f91f0d2efb9ccf6415d6cd22309f2b905f58c313523bc06859493f1338->enter($__internal_f215c2f91f0d2efb9ccf6415d6cd22309f2b905f58c313523bc06859493f1338_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "error"));

            $__internal_086098acb0f30c6cd7c6201d791f40cb1657779410e5a5dd8573473874345374 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_086098acb0f30c6cd7c6201d791f40cb1657779410e5a5dd8573473874345374->enter($__internal_086098acb0f30c6cd7c6201d791f40cb1657779410e5a5dd8573473874345374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "error"));

            // line 26
            echo "    ";
            $context["messages"] = $this;
            // line 27
            echo "    ";
            echo $context["messages"]->macro_default((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 27, $this->getSourceContext()); })()), "remove", "negative", "sylius.ui.error");
            echo "
";
            
            $__internal_086098acb0f30c6cd7c6201d791f40cb1657779410e5a5dd8573473874345374->leave($__internal_086098acb0f30c6cd7c6201d791f40cb1657779410e5a5dd8573473874345374_prof);

            
            $__internal_f215c2f91f0d2efb9ccf6415d6cd22309f2b905f58c313523bc06859493f1338->leave($__internal_f215c2f91f0d2efb9ccf6415d6cd22309f2b905f58c313523bc06859493f1338_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@SyliusUi/Macro/messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 27,  200 => 26,  182 => 25,  164 => 22,  161 => 21,  143 => 20,  125 => 17,  122 => 16,  104 => 15,  84 => 10,  78 => 7,  75 => 6,  73 => 5,  68 => 3,  63 => 2,  42 => 1,  31 => 24,  28 => 19,  25 => 14,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro default(message, icon, type, header) %}
    <div class=\"ui icon {{ type|default('') }} message\">
        <i class=\"{{ icon }} icon\"></i>
        <div class=\"content\">
            {% if type is not empty %}
            <div class=\"header\">
                {{ header|default(type)|trans }}
            </div>
            {% endif %}
            <p>{{ message|trans }}</p>
        </div>
    </div>
{% endmacro %}

{% macro info(message) %}
    {% import _self as messages %}
    {{ messages.default(message, 'info circle', 'info', 'sylius.ui.info') }}
{% endmacro %}

{% macro success(message) %}
    {% import _self as messages %}
    {{ messages.default(message, 'checkmark', 'success', 'sylius.ui.success') }}
{% endmacro %}

{% macro error(message) %}
    {% import _self as messages %}
    {{ messages.default(message, 'remove', 'negative', 'sylius.ui.error') }}
{% endmacro %}
", "@SyliusUi/Macro/messages.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle\\Resources\\views\\Macro\\messages.html.twig");
    }
}
