<?php

/* SonataCoreBundle:Form:colorpicker.html.twig */
class __TwigTemplate_5ca7a29a30dd468f248abf1c79e0d4d5234b402a64ec917dd5c37e3b71db1cf7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sonata_type_color_selector_widget' => array($this, 'block_sonata_type_color_selector_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_152d183a704a1de72ed7b5449b19786848cce0a3cc6d4e97d019cfea8d2ab978 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_152d183a704a1de72ed7b5449b19786848cce0a3cc6d4e97d019cfea8d2ab978->enter($__internal_152d183a704a1de72ed7b5449b19786848cce0a3cc6d4e97d019cfea8d2ab978_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataCoreBundle:Form:colorpicker.html.twig"));

        $__internal_3484f5662e2264144017cbfec9db9e8baa616e097ce37be080d91c61da96d5a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3484f5662e2264144017cbfec9db9e8baa616e097ce37be080d91c61da96d5a0->enter($__internal_3484f5662e2264144017cbfec9db9e8baa616e097ce37be080d91c61da96d5a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataCoreBundle:Form:colorpicker.html.twig"));

        // line 11
        $this->displayBlock('sonata_type_color_selector_widget', $context, $blocks);
        
        $__internal_152d183a704a1de72ed7b5449b19786848cce0a3cc6d4e97d019cfea8d2ab978->leave($__internal_152d183a704a1de72ed7b5449b19786848cce0a3cc6d4e97d019cfea8d2ab978_prof);

        
        $__internal_3484f5662e2264144017cbfec9db9e8baa616e097ce37be080d91c61da96d5a0->leave($__internal_3484f5662e2264144017cbfec9db9e8baa616e097ce37be080d91c61da96d5a0_prof);

    }

    public function block_sonata_type_color_selector_widget($context, array $blocks = array())
    {
        $__internal_46e9ef2ac814daa5b08743ae3ade40ce0f4c00ca361e129e9262351da0e9b40c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46e9ef2ac814daa5b08743ae3ade40ce0f4c00ca361e129e9262351da0e9b40c->enter($__internal_46e9ef2ac814daa5b08743ae3ade40ce0f4c00ca361e129e9262351da0e9b40c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_color_selector_widget"));

        $__internal_725dc931c767eb6b6b3ff2b9f0d981dc2032161b0845300a737974a4c784e669 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_725dc931c767eb6b6b3ff2b9f0d981dc2032161b0845300a737974a4c784e669->enter($__internal_725dc931c767eb6b6b3ff2b9f0d981dc2032161b0845300a737974a4c784e669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_color_selector_widget"));

        // line 12
        echo "    ";
        $this->displayBlock("choice_widget", $context, $blocks);
        echo "
    ";
        // line 13
        ob_start();
        // line 14
        echo "        <script type=\"text/javascript\">
            jQuery(function (\$) {
                var select2FormatColorSelect = function format(state) {
                    if (!state.id || state.disabled) {
                        return state.text;
                    }

                    return ' <i class=\"fa fa-square\" style=\"color: '+ state.id +'\"></i> ' + state.text;
                };

                \$('#";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 24, $this->getSourceContext()); })()), "html", null, true);
        echo "').select2({
                    formatResult:    select2FormatColorSelect,
                    formatSelection: select2FormatColorSelect,
                    width:           '100%',
                    escapeMarkup:    function(m) { return m; }
                });
            });
        </script>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_725dc931c767eb6b6b3ff2b9f0d981dc2032161b0845300a737974a4c784e669->leave($__internal_725dc931c767eb6b6b3ff2b9f0d981dc2032161b0845300a737974a4c784e669_prof);

        
        $__internal_46e9ef2ac814daa5b08743ae3ade40ce0f4c00ca361e129e9262351da0e9b40c->leave($__internal_46e9ef2ac814daa5b08743ae3ade40ce0f4c00ca361e129e9262351da0e9b40c_prof);

    }

    public function getTemplateName()
    {
        return "SonataCoreBundle:Form:colorpicker.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  63 => 24,  51 => 14,  49 => 13,  44 => 12,  26 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}
{% block sonata_type_color_selector_widget %}
    {{ block('choice_widget') }}
    {% spaceless %}
        <script type=\"text/javascript\">
            jQuery(function (\$) {
                var select2FormatColorSelect = function format(state) {
                    if (!state.id || state.disabled) {
                        return state.text;
                    }

                    return ' <i class=\"fa fa-square\" style=\"color: '+ state.id +'\"></i> ' + state.text;
                };

                \$('#{{ id }}').select2({
                    formatResult:    select2FormatColorSelect,
                    formatSelection: select2FormatColorSelect,
                    width:           '100%',
                    escapeMarkup:    function(m) { return m; }
                });
            });
        </script>
    {% endspaceless %}
{% endblock sonata_type_color_selector_widget %}
", "SonataCoreBundle:Form:colorpicker.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sonata-project\\core-bundle/Resources/views/Form/colorpicker.html.twig");
    }
}
