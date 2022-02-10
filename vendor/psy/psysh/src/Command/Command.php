<?php

/*
 * This file is part of Psy Shell.
 *
 * (c) 2012-2020 Justin Hileman
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Psy\Command;

use Psy\Shell;
use Symfony\Component\Console\Application;
use Symfony\Component\Console\Command\Command as BaseCommand;
use Symfony\Component\Console\Helper\Table;
use Symfony\Component\Console\Helper\TableHelper;
use Symfony\Component\Console\Helper\TableStyle;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * The Psy Shell base command.
 */
abstract class Command extends BaseCommand
{
    /**
     * Sets the application instance for this command.
     *
     * @param Application|null $application An Application instance
     *
     * @api
     */
    public function setApplication(Application $application = null)
    {
        if ($application !== null && !$application instanceof Shell) {
            throw new \InvalidArgumentException('PsySH Commands require an instance of Psy\Shell');
        }

        return parent::setApplication($application);
    }

    /**
     * {@inheritdoc}
     */
<<<<<<< HEAD
    public function asText(): string
    {
        $messages = [
            '<comment>Usage:</comment>',
            ' '.$this->getSynopsis(),
=======
    public function asText()
    {
        $messages = [
            '<comment>Usage:</comment>',
            ' ' . $this->getSynopsis(),
>>>>>>> parent of 31cfa1b1 (p)
            '',
        ];

        if ($this->getAliases()) {
            $messages[] = $this->aliasesAsText();
        }

        if ($this->getArguments()) {
            $messages[] = $this->argumentsAsText();
        }

        if ($this->getOptions()) {
            $messages[] = $this->optionsAsText();
        }

        if ($help = $this->getProcessedHelp()) {
            $messages[] = '<comment>Help:</comment>';
<<<<<<< HEAD
            $messages[] = ' '.\str_replace("\n", "\n ", $help)."\n";
=======
            $messages[] = ' ' . \str_replace("\n", "\n ", $help) . "\n";
>>>>>>> parent of 31cfa1b1 (p)
        }

        return \implode("\n", $messages);
    }

    /**
     * {@inheritdoc}
     */
<<<<<<< HEAD
    private function getArguments(): array
=======
    private function getArguments()
>>>>>>> parent of 31cfa1b1 (p)
    {
        $hidden = $this->getHiddenArguments();

        return \array_filter($this->getNativeDefinition()->getArguments(), function ($argument) use ($hidden) {
            return !\in_array($argument->getName(), $hidden);
        });
    }

    /**
     * These arguments will be excluded from help output.
     *
     * @return array
     */
<<<<<<< HEAD
    protected function getHiddenArguments(): array
=======
    protected function getHiddenArguments()
>>>>>>> parent of 31cfa1b1 (p)
    {
        return ['command'];
    }

    /**
     * {@inheritdoc}
     */
<<<<<<< HEAD
    private function getOptions(): array
=======
    private function getOptions()
>>>>>>> parent of 31cfa1b1 (p)
    {
        $hidden = $this->getHiddenOptions();

        return \array_filter($this->getNativeDefinition()->getOptions(), function ($option) use ($hidden) {
            return !\in_array($option->getName(), $hidden);
        });
    }

    /**
     * These options will be excluded from help output.
     *
     * @return array
     */
<<<<<<< HEAD
    protected function getHiddenOptions(): array
=======
    protected function getHiddenOptions()
>>>>>>> parent of 31cfa1b1 (p)
    {
        return ['verbose'];
    }

    /**
     * Format command aliases as text..
     *
     * @return string
     */
<<<<<<< HEAD
    private function aliasesAsText(): string
    {
        return '<comment>Aliases:</comment> <info>'.\implode(', ', $this->getAliases()).'</info>'.\PHP_EOL;
=======
    private function aliasesAsText()
    {
        return '<comment>Aliases:</comment> <info>' . \implode(', ', $this->getAliases()) . '</info>' . PHP_EOL;
>>>>>>> parent of 31cfa1b1 (p)
    }

    /**
     * Format command arguments as text.
     *
     * @return string
     */
<<<<<<< HEAD
    private function argumentsAsText(): string
=======
    private function argumentsAsText()
>>>>>>> parent of 31cfa1b1 (p)
    {
        $max = $this->getMaxWidth();
        $messages = [];

        $arguments = $this->getArguments();
        if (!empty($arguments)) {
            $messages[] = '<comment>Arguments:</comment>';
            foreach ($arguments as $argument) {
                if (null !== $argument->getDefault() && (!\is_array($argument->getDefault()) || \count($argument->getDefault()))) {
                    $default = \sprintf('<comment> (default: %s)</comment>', $this->formatDefaultValue($argument->getDefault()));
                } else {
                    $default = '';
                }

<<<<<<< HEAD
                $description = \str_replace("\n", "\n".\str_pad('', $max + 2, ' '), $argument->getDescription());
=======
                $description = \str_replace("\n", "\n" . \str_pad('', $max + 2, ' '), $argument->getDescription());
>>>>>>> parent of 31cfa1b1 (p)

                $messages[] = \sprintf(" <info>%-${max}s</info> %s%s", $argument->getName(), $description, $default);
            }

            $messages[] = '';
        }

<<<<<<< HEAD
        return \implode(\PHP_EOL, $messages);
=======
        return \implode(PHP_EOL, $messages);
>>>>>>> parent of 31cfa1b1 (p)
    }

    /**
     * Format options as text.
     *
     * @return string
     */
<<<<<<< HEAD
    private function optionsAsText(): string
=======
    private function optionsAsText()
>>>>>>> parent of 31cfa1b1 (p)
    {
        $max = $this->getMaxWidth();
        $messages = [];

        $options = $this->getOptions();
        if ($options) {
            $messages[] = '<comment>Options:</comment>';

            foreach ($options as $option) {
                if ($option->acceptValue() && null !== $option->getDefault() && (!\is_array($option->getDefault()) || \count($option->getDefault()))) {
                    $default = \sprintf('<comment> (default: %s)</comment>', $this->formatDefaultValue($option->getDefault()));
                } else {
                    $default = '';
                }

                $multiple = $option->isArray() ? '<comment> (multiple values allowed)</comment>' : '';
<<<<<<< HEAD
                $description = \str_replace("\n", "\n".\str_pad('', $max + 2, ' '), $option->getDescription());
=======
                $description = \str_replace("\n", "\n" . \str_pad('', $max + 2, ' '), $option->getDescription());
>>>>>>> parent of 31cfa1b1 (p)

                $optionMax = $max - \strlen($option->getName()) - 2;
                $messages[] = \sprintf(
                    " <info>%s</info> %-${optionMax}s%s%s%s",
<<<<<<< HEAD
                    '--'.$option->getName(),
=======
                    '--' . $option->getName(),
>>>>>>> parent of 31cfa1b1 (p)
                    $option->getShortcut() ? \sprintf('(-%s) ', $option->getShortcut()) : '',
                    $description,
                    $default,
                    $multiple
                );
            }

            $messages[] = '';
        }

<<<<<<< HEAD
        return \implode(\PHP_EOL, $messages);
=======
        return \implode(PHP_EOL, $messages);
>>>>>>> parent of 31cfa1b1 (p)
    }

    /**
     * Calculate the maximum padding width for a set of lines.
     *
     * @return int
     */
<<<<<<< HEAD
    private function getMaxWidth(): int
=======
    private function getMaxWidth()
>>>>>>> parent of 31cfa1b1 (p)
    {
        $max = 0;

        foreach ($this->getOptions() as $option) {
            $nameLength = \strlen($option->getName()) + 2;
            if ($option->getShortcut()) {
                $nameLength += \strlen($option->getShortcut()) + 3;
            }

            $max = \max($max, $nameLength);
        }

        foreach ($this->getArguments() as $argument) {
            $max = \max($max, \strlen($argument->getName()));
        }

        return ++$max;
    }

    /**
     * Format an option default as text.
     *
     * @param mixed $default
     *
     * @return string
     */
<<<<<<< HEAD
    private function formatDefaultValue($default): string
=======
    private function formatDefaultValue($default)
>>>>>>> parent of 31cfa1b1 (p)
    {
        if (\is_array($default) && $default === \array_values($default)) {
            return \sprintf("['%s']", \implode("', '", $default));
        }

        return \str_replace("\n", '', \var_export($default, true));
    }

    /**
     * Get a Table instance.
     *
     * Falls back to legacy TableHelper.
     *
     * @return Table|TableHelper
     */
    protected function getTable(OutputInterface $output)
    {
        if (!\class_exists(Table::class)) {
            return $this->getTableHelper();
        }

        $style = new TableStyle();

        // Symfony 4.1 deprecated single-argument style setters.
        if (\method_exists($style, 'setVerticalBorderChars')) {
            $style->setVerticalBorderChars(' ');
            $style->setHorizontalBorderChars('');
            $style->setCrossingChars('', '', '', '', '', '', '', '', '');
        } else {
            $style->setVerticalBorderChar(' ');
            $style->setHorizontalBorderChar('');
            $style->setCrossingChar('');
        }

        $table = new Table($output);

        return $table
            ->setRows([])
            ->setStyle($style);
    }

    /**
     * Legacy fallback for getTable.
     *
     * @return TableHelper
     */
<<<<<<< HEAD
    protected function getTableHelper(): TableHelper
=======
    protected function getTableHelper()
>>>>>>> parent of 31cfa1b1 (p)
    {
        $table = $this->getApplication()->getHelperSet()->get('table');

        return $table
            ->setRows([])
            ->setLayout(TableHelper::LAYOUT_BORDERLESS)
            ->setHorizontalBorderChar('')
            ->setCrossingChar('');
    }
}
